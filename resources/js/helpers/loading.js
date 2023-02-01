class Loading {

    constructor(item) {
        this.item = item;
        this.modalParentId = 'modalWrapper';
    }

    isModal(){
        return this.item.attr('id') === this.modalParentId
    }

    isButton(){
        return this.item.is("button") || this.item.parent('button')
    }

    isForm(){
        return this.item.is("form")
    }

    setFormSpinner(){
        this.item.closest('form').find(':submit').addClass('show-spinner').prop('disabled', true);
    }

    setModalSpinner(){
        // $('#'+this.modalParentId).addClass('show-spinner');
        this.item.closest('#'+this.modalParentId).find('.modal-dialog').addClass('show-spinner')
    }

    setBodySpinner(){
        $('#content').addClass('show-spinner');
    }

    setButtonSpinner(){
        this.item.closest('.btn').find('button').addClass('show-spinner disabled')
        this.item.addClass('show-spinner').addClass('disabled');
        $("button.disabled").attr("disabled", true);
    }

    handle(){
        // this.isButton() ? this.setButtonSpinner(): ''
        // this.isForm() ? this.setFormSpinner() : ''
        this.setBodySpinner()
        // this.isModal() ? this.setModalSpinner() : ''
    }
}

$.fn.setLoader = function(options) {
    // default options.
    const settings = $.extend({
        disableBtnId: null, // disable the button only
        focus: false,
        fullScreen: false,
    }, options);

    let loading = new Loading($(this));
    loading.handle()

    // if (settings.id) {
    //     $('#' + settings.id).prop('disabled', true);
    //     $('#' + settings.id).addClass('disabled');
    // } else {
    //     $(this).prop('disabled', true);
    //     $(this).addClass('disabled');
    // }
};

$.fn.hideLoader = function(options) {

    const settings = $.extend({
        disableBtnPrefixId: null, // disable the button only
    }, options);

    removeTheClasses('show-spinner')
    // removeTheClasses('disabled')
    removeTheClasses('show-spinner') // double remove is needed
    // $(':button').prop('disabled', false);
    $('button[id^="'+settings.disableBtnPrefixId+'"]').prop('disabled', false); // id starts with ...
};

function removeTheClasses(className){
    let elems = document.getElementsByClassName(className);
    Array.prototype.forEach.call(elems, function(el) {
        // console.log(el.id, el.tagName);
        if(el.tagName === 'BUTTON'){
            $(el).removeAttr("disabled")
            $(el).removeClass("disabled")
        }

        $(el).removeClass(className)
    });
}

