
function CheckLogin(_txtGmail, _txtPass) {

    var txtGmail = document.getElementById(_txtGmail);
    var txtPass = document.getElementById(_txtPass);
    if (!txtGmail.value) {
        return errGmail.innerHTML = "Vui long dien vao truong nay!";

    }
    else if (txtGmail.value.length <= 6) {
        errGmail.innerHTML = "Tên tài khoản phải hơn 10 kí tự!";
        return false;
    }
    else {
        errGmail.innerHTML = "";
    }
    if (!txtPass.value) {
        errPass.innerHTML = "Vui long dien vao truong nay!";
        return false;
    }
    else {
        errHomeTown.innerHTML = "";
    }
    return true;
}

var customObject = {
    IsEmpty: function (id, dieukien) {
        var value = $("#" + id).val();
        return value.length > 0;
    },
    CheckEmail: function (id, hauto) {
        var value = $("#" + id).val();
        if (value.length <= 0)
            return false;
        // kiem tra dau @ cos hay khong

        // kiem tra hau to email
        // mang email
        var arrEmail = value.split('@');
        var curent_hauto = arrEmail[1];
        if (curent_hauto == null) return false;
        return curent_hauto.toString() == hauto;
    }

};
function CheckLength(id, length) {
    var value = $("#" + id).val();
    return value.length >= 0 && value.length <= length;
}
function CheckDatetime(id, dieukien) {
    //.....
}

function CheckIsNumber(id, dieukien) {
    //.....
}



var HienthiLoi = function () {
    this.Tenham = "";
    this.Dieukien = "";
    this.Tenloi = "";
}
var ThanhphanGoc = function () {
    this.id = "";
    this.danh_sach_ham_check = new Array();
    this.ThemHamiemTra = function (hamkiemtra, phanhoiloi, dieukien) {
        var ht = new HienthiLoi();
        ht.Tenham = hamkiemtra;
        ht.Tenloi = phanhoiloi;
        ht.Dieukien = dieukien;
        this.danh_sach_ham_check.push(ht);
    }
    this.Kiemtra = function () {
        for (var i = 0; i < this.danh_sach_ham_check.length; i++) {
            if (customObject[this.danh_sach_ham_check[i].Tenham](this.id, this.danh_sach_ham_check[i].Dieukien)) {
                $('#err_' + this.id).html("");
                $('#err_' + this.id).css("display", "none");
            }
            else {
                $('#err_' + this.id).html(this.danh_sach_ham_check[i].Tenloi);
                $('#err_' + this.id).css("display", "block");
                return;
            }
        }
    }
}
