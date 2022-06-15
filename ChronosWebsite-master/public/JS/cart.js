
var inputValue = document.getElementsByTagName('input');
var decreaserValue = document.querySelector('#product-quantity-input');
var increaserValue = document.querySelectorAll('.product-quantity-add');
function decreaser(id) {
    for (var i = 0; i < inputValue.length; i++) {
        if (id == inputValue[i].name) {
            var value = inputValue[i].value;
            var newValue = parseInt(value) - 1;
            inputValue[i].value = newValue;
        }
    }

};

function increaser(id) {
    for (var i = 0; i < inputValue.length; i++) {
        console.log(inputValue[i].name);
        if (id == inputValue[i].name) {
            var value = inputValue[i].value;
            var newValue = parseInt(value) + 1;
            inputValue[i].value = newValue;
        }
    }

};




// Chọn địa chỉ
var provinceList = [];
var districtList = [];
var wardtList = []
var showOption = function (data) {
    var content = "";
    for (var i = 0; i < data.length; i++) {
        content += `<option value="${data[i].name}">${data[i].name}</option>`
    }
    return content;
}
var provincesValue;
var getDivisions = function () {
    var promise = axios({
        url: `https://provinces.open-api.vn/api/?depth=3`,
        method: "GET",
    });
    promise.then(function (res) {
        provinceList = res.data;
        console.log(provinceList);
        var provinces = showOption(provinceList);
        document.querySelector(".provinces").innerHTML = provinces;
        var idProvince = document.querySelector(".provinces").value;
        filterDictricts(idProvince)
    });
    promise.catch(function (err) {
        console.log("err", err);
    });
}
getDivisions()

var filterDictricts = function (id) {
    var districtArr = []
    for (var i = 0; i < provinceList.length; i++) {
        if (provinceList[i].name == id) {
            districtArr = provinceList[i].districts;
            var districtsShow = showOption(districtArr)
            document.querySelector(".dictricts").innerHTML = districtsShow;
            var idDictrict = document.querySelector(".dictricts").value;
            filterWards(idDictrict, districtArr)
        }
    }
}

document.querySelector(".provinces").onchange = () => {
    var idProvince = document.querySelector(".provinces").value;
    filterDictricts(idProvince)
}

var filterWards = function (id, data) {
    var wardArr = []
    for (var i = 0; i < data.length; i++) {
        if (data[i].name == id) {
            wardArr = data[i].wards
            var wardsShow = showOption(wardArr)
            document.querySelector(".wards").innerHTML = wardsShow;
        }

    }
}

document.querySelector(".dictricts").onchange = () => {
    var idProvince = document.querySelector(".provinces").value;
    var idDictrict = document.querySelector(".dictricts").value;
    var districtArr = []
    for (var i = 0; i < provinceList.length; i++) {
        if (provinceList[i].code == idProvince) {
            districtArr = provinceList[i].districts;
        }
    }
    filterWards(idDictrict, districtArr)
}

