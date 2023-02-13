$.fn.isValidHttpUrl = function(string) {
    let url;
    try {
        url = new URL(string);
    } catch (_) {
        return false;
    }
    return url.protocol === "http:" || url.protocol === "https:";
}

const handleValidationErr = (err) => {
    let resJson = err.responseJSON;
    if (resJson.errors && Object.keys(resJson.errors).length > 0) {
        $.each(resJson.errors, function(k, v) {
            appendErrMsg(k, v)
        });
    }
}
