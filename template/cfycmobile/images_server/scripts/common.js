function ajax_(url_, data_, success, loading){
    $.ajax({
        type: "POST",
        url: url_,
        data: data_,
        beforeSend: function () {
            $(success).html(loading);
        },
        success: function (html) {
            $(success).html(html);
        }
    });
}
function countProperty (obj) {
    var count = 0;
    for (var k in obj) {
        if (obj.hasOwnProperty(k)) {
           ++count;
        }
    }
    return count;
}
function isEmpty (value, allowEmptyString) {
    return (value === null) || (value === 'null') || (value === undefined) || (value === 'undefined') || (!allowEmptyString ? value === '' : false) || (typeof (value) === 'object' && countProperty(value) === 0) || (value instanceof jQuery && value.length === 0);
}
function initAnimateArticle () {
    if ($().jCarouselLite) {
        $(".animateArticle").jCarouselLite({
            btnNext: ".slideArticleContent .next",
            btnPrev: ".slideArticleContent .prev",
            mouseWheel: true,
            visible: 1,
            afterEnd: function () {
                $(window).resize();
            }
        });
    }
}
/**
function check (frm) {
    var error = 0;
    if (validateObj.checkRequired(frm.email) === false) error++;
    if (validateObj.checkRequired(frm.email, 'error-email-required') === false) error++;
    if (validateObj.checkEmail(frm.email, 'error-email-correct') === false) error++;
    if (validateObj.checkInt(frm.email, 'error-email-number') === false) error++;
    if (validateObj.checkDate(frm.email, 'error-email-date') === false) error++;
    if (validateObj.checkUsername(frm.email, 'error-email-text') === false) error++;
    if (validateObj.checkChecked(frm.agree, 'error-agree-checked') === false) error++;
    if (validateObj.checkChecked(frm.gender, 'error-gender-checked') === false) error++;
    if (validateObj.checkPhone(frm.phone, 'error-phone-phone') === false) error++;
    if (validateObj.checkRemote(frm.email, 'error-email-remote', BASE_URL + '/registration/validate') === false) error++;
    if (error > 0) { return false; }
}
 */
var validateObj = {
    check: function (obj, err_id, func) {
        if (err_id == null) err_id = 'error-' + obj.name;
        $('#' + err_id).css('display', 'none');
        if (this[func](obj) === false) {
            $('#' + err_id).css('display', 'block');
            return false;
        }
        return true;
    },
    ltrim: function (_1) {
        var _2 = /^\s */;
        return _1.replace(_2, "");
    },
    rtrim: function (_3) {
        var _4 = /\s *$/;
        return _3.replace(_4, "");
    },
    trim: function (_5) {
        return this.ltrim(this.rtrim(_5));
    },
    _checkRequired: function (obj) {
        var st = this.trim(obj.value);
        return !(st === '' || st === $(obj).attr('placeholder'));
    },
    checkRequired: function (obj, err_id) {
        return this.check(obj, err_id, '_checkRequired');
    },
    _checkEmail: function (obj) {
        var _2a = this.trim(obj.value),
            objRegExp = /\S+@\S+\.\S+/;
        return objRegExp.test(_2a);
    },
    checkEmail: function (obj, err_id) {
        return this.check(obj, err_id, '_checkEmail');
    },
    _checkPhone: function (obj) {
        var _40 = "0123456789-+() ",
            _41 = this.trim(obj.value);
        if (_41.length < 1) {
            return false;
        }
        for (i = 0; i < _41.length; i++) {
            ch = _41.charAt(i);
            if (_40.indexOf(ch) < 0) {
                return false;
            }
        }
        return true;
    },
    checkPhone: function (obj, err_id) {
        return this.check(obj, err_id, '_checkPhone');
    },
    _checkInt: function (obj) {
        var _2a = this.trim(obj.value);
        if (_2a.length < 1 || _2a == "") {
            return false;
        }
        var _2b = "0123456789";
        for (i = 0; i < _2a.length; i++) {
            ch = _2a.charAt(i);
            if (_2b.indexOf(ch) < 0) {
                return false;
            }
        }
        if (_2a.valueOf() <= 0) {
            return false;
        }
        return true;
    },
    checkInt: function (obj, err_id) {
        return this.check(obj, err_id, '_checkInt');
    },
    _checkDate: function (obj) {
        var _2a = this.trim(obj.value),
            objRegExp = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/;
        return objRegExp.test(_2a);
    },
    checkDate: function (obj, err_id) {
        return this.check(obj, err_id, '_checkDate');
    },
    _checkUsername: function (obj) {
        var _2a = this.trim(obj.value),
            objRegExp = /^[a-zA-Z]+[a-zA-Z0-9]+$/;
        return objRegExp.test(_2a);
    },
    checkUsername: function (obj, err_id) {
        return this.check(obj, err_id, '_checkUsername');
    }
    ,
    _checkChecked: function (obj) {
        if (obj.length === undefined) {
            return obj.checked;
        } else {
            var result = false;
            for (i = 0; i < obj.length; i++) {
                if (obj[i].checked) {
                    result = true;
                }
            }
            return result;
        }
    },
    checkChecked: function (obj, err_id) {
        return this.check(obj, err_id, '_checkChecked');
    },
    _checkRemote: function (obj) {
        var _2a = this.trim(obj.value),
            data = {},
            result = true;
        data[obj.name] = _2a;
        $.ajax({
            type: "POST",
            data: data,
            url: obj['ajax-url'],
            async: false,
            success: function (data) {
                if (parseInt(data) !== 1) {
                    result = false;
                }
            }
        });
        return result;
    },
    checkRemote: function (obj, err_id, url) {
        if (isEmpty(url) === true) return false;
        obj['ajax-url'] = url;
        return this.check(obj, err_id, '_checkRemote');
    }
}