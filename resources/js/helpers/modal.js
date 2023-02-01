let prevModalId = null;
let prevHeader = null;
let modalIsOpening = false;
let openingModalIds = [];

$.fn.closeModal = function(options) {

    const settings = $.extend({
        closeLatestModal: false,
    }, options);

    let lastModal = openingModalIds.at(-1) // get last array value
    $('#modalId'+lastModal).modal('hide')
    $('#modalId'+lastModal).remove()
    setOpeningModalIds(lastModal, 'close')
    changeThemeColor(getColorCodeByClassName('navbar'));
}

function setOpeningModalIds(modalId, type = 'open'){

    if(type === 'open'){

        if(openingModalIds.length > 0) $('#modalId'+openingModalIds.at(-1)).css('opacity', 0) // hide prev modal
        if (!openingModalIds.includes(modalId)) // check duplicate array
            openingModalIds.push(modalId)

        openingModalIds = $.grep(openingModalIds, n => n === 0 || n); // remove duplicate array value

    } else if(openingModalIds.length > 0){
        openingModalIds.splice(-1) // remove from last array
        $('#modalId'+openingModalIds.at(-1)).css('opacity', 1) // show back prev modal
    }
}

const getColorCodeByClassName = (className) => {
    let elem, style;
    elem = document.querySelector('.'+className);
    style = getComputedStyle(elem);
    return style.backgroundColor;
}
const changeThemeColor = (colorCode) => {
    let metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", colorCode);
}

$.fn.openModal = async function(options) {

    if(modalIsOpening) return true;

    const settings = $.extend({
        form: null,
        size: 'lg', // [lg, md, sm]
        header: null,
        url: '',
        html: null,
        refresh: false, // if false, new modal
    }, options);

    let id = !settings.refresh ? Date.now() : openingModalIds.at(-1);
    if(!settings.refresh) setOpeningModalIds(id)

    modalIsOpening = true
    let modal = new Modal(settings, id);

    changeThemeColor(getColorCodeByClassName('modal-content'));

    return modal.handle()
}

class Modal{

    constructor(settings, id) {
        this.settings = settings;
        this.id = id;
        this.modalParentId = 'modalWrapper';
    }

    async getContentFromUrl(){
        return await $('#'+this.modalParentId).sendRequest({
            url: this.settings.url,
            data: this.settings.form ? this.settings.form.serialize() : null,
            method: 'GET',
        });
    }

    getModalId() {
        return prevModalId
    }

    contentIsReady() {
        return this.settings.html
        // return this.settings.html && this.settings.refresh
        // return !(this.settings.refresh !== true || this.settings.html == null)
    }

    isRefreshContent(){
        return this.settings.refresh
    }

    handle(){

        if(this.contentIsReady()){
            this.handleLayout()
            $('#modal-body-'+ this.id).setHtml({html: this.settings.html});
            if(!this.isRefreshContent()){
                $('#modalId'+this.id).modal('show');
            }
            modalIsOpening = false;

        } else {

            this.getContentFromUrl().then((res) => { // wait ajax request
                this.handleLayout()
                $('#modal-body-'+this.id).setHtml({html: res.html});
                $('#modalId'+this.id).modal('show');
                modalIsOpening = false;

            }).catch((res)=>{
                modalIsOpening = false;
                console.log(res);
            })
        }
    }

    handleLayout(){
        this.setLayout()
        this.setHeader()
        // this.setBody()
    }

    hasHeader(){
        return this.settings.header !== false
    }

    setLayout(){

        if(this.isRefreshContent()){
            $('#modal-content-'+this.id).empty()

        } else{
            let html = `
                <div class="modal-new fade modal" id="modalId${this.id}">
                    <div class="modal-dialog ${this.settings.size === 'lg' ? 'modal-fullscreen-md-down' : ''}  modal-${this.settings.size}" role="document">
                        <div class="modal-content" id="modal-content-${this.id}"></div>
                    </div>
                </div>
            `;
            $('#'+this.modalParentId).append(html);
            $('#modalId'+this.id).modal({backdrop:'static', keyboard:false});
        }
    }

    setHeader(){
        if(this.hasHeader() && this.getHeaderTitle()) $('#modal-content-'+this.id).addClass('with-header')
        $('#modal-content-'+this.id).append(this.getHeader() + this.getBody())
    }

    getHeaderTitle(){
        let header = this.settings.header == null ? prevHeader : this.settings.header
        prevHeader = header
        return !header ? '' : header
    }

    getHeader(){
        return '<div class="modal-header">'+this.getHeaderTitle()+'<button type="button" class="btn-close" onclick="$(`#modalId' + this.id + '`).closeModal()"></button></div>'
    }

    getBody() {
        return '<div class="modal-body" id="modal-body-'+this.id+'"></div>'
    }
}
