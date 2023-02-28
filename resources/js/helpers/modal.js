let prevModalId = null;
let prevHeader = null;
let modalIsOpening = false;
var openingModalIds = [];

$.fn.getModalId = function(options) {

    const settings = $.extend({
        latest: false,
    }, options);

    if(settings.latest){
        return 'modalId'+openingModalIds.at(-1) // get last array value
    }

    return openingModalIds;
}

$.fn.closeModal = async function(options) {

    const settings = $.extend({
        closeLatestModal: false,
    }, options);

    let lastModalId = openingModalIds.at(-1) // get last array value
    $('#modalId'+lastModalId).modal('hide');
    const container = document.getElementById('modalId'+lastModalId);
    container.remove()

    setOpeningModalIds(lastModalId, 'close')
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

    if(!!document.querySelector('.'+className)){
        elem = document.querySelector('.'+className);
        style = getComputedStyle(elem);
        return style.backgroundColor;
    }
    return '#fff';
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

    modalIsOpening = true
    let modal = new Modal(settings, id);

    // $('#queueListing-2').initialiseSortable()
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
            $('#modal-content-'+ this.id).setHtml({html: this.settings.html});
            if(!this.isRefreshContent()){
                $('#modalId'+this.id).modal('show');
            }
            modalIsOpening = false;

        } else {

            this.getContentFromUrl().then((res) => { // wait ajax request
                this.handleLayout()
                $('#modal-content-'+this.id).setHtml({html: res.html});
                // $('#modalId'+this.id).modal('show');

                // const container = document.getElementById('modalId'+this.id);
                // const modal = new bootstrap.Modal(container);
                // modal.show();
                $('#modalId'+this.id).modal({backdrop:'static', keyboard:false});
                modalIsOpening = false;

            }).catch((res)=>{
                modalIsOpening = false;
                console.log(res);
                return false;
            })
        }

        if(!this.isRefreshContent()){
            setOpeningModalIds(this.id)
            changeThemeColor(getColorCodeByClassName('modal-content'));
        }
    }

    handleLayout(){
        this.setLayout()
        // this.setHeader()
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
                <div class="modal fade" id="modalId${this.id}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-${this.settings.size}" role="document">
                        <div class="modal-content" id="modal-content-${this.id}"></div>
                    </div>
                </div>
            `;
            $('#'+this.modalParentId).append(html);

        }
    }

    setHeader(){
        if(this.hasHeader() && this.getHeaderTitle()) $('#modal-content-'+this.id).addClass('with-header')
        $('#modal-content-'+this.id).append(this.getHeader() + this.getBody())
    }

    getHeaderTitle(){

        let header = this.settings.header == null ? prevHeader : this.settings.header
        console.log(header);
        prevHeader = header
        return !header ? '' : header
    }

    getHeader(){
        return `<div class="modal-header">
                  <div class="mb-2">
                        <h1 class="text-capitalize">${this.getHeaderTitle()}</h1>
                        <button type="button" class="close" onclick="$('#modalId${this.id}').closeModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>`
    }

    getBody() {
        return `<div class="modal-body" id="modal-body-${this.id}"></div>`
    }
}
