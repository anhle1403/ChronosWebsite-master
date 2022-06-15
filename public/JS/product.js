const url = "http://125.234.104.133/web_php/gr09/data.json"
const base_url = "http://125.234.104.133/web_php/gr09"

function getData(callback) {
  fetch(url)
    .then(function (resp) {
      return resp.json();
    })
    .then(callback)
}


let sizes = []
let moventment = []
let prices = []
let straps = []

//render dữ liệu
function renderData(renderDataArray) {
  const productArray = renderDataArray.map(product => {
    return `
    <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
    <div>
    <figure class="card card-product-grid">
        <div class="img-wrap item-zoom">                       
            <img  src="${base_url}/Assets/upload/${product.image}"" alt="${product.name}" >
            <a href="${base_url}/products/productDetail/${product.id}"><div class="titleProduct">${product.movement}, ${product.strap} Strap - ${product.size}mm (${product.name})</div> </a>
        </div>
        <div>
          <button href="#" class="btnProduct button btn"><a href="${base_url}/products/productDetail/${product.id}">See more</a></button>
        </div>
        
    </figure>
</div>
</div>
    `
  }).join('')
  document.querySelector('#allProducts').innerHTML = productArray
}

getData(function (data) {
  var product_array = [...data.product]

  let inputTags = document.getElementsByTagName("input");
  for (let i = 0; i < inputTags.length; i++) {
    inputTags[i].addEventListener("click", filterProducts);
  }

  //filter strap
  function filterStrap() {

    let checkedBoxValues = []
    let filterStrap = document.querySelectorAll('input[name="strap"]:checked')
    filterStrap.forEach((strap) => {
      checkedBoxValues.push(strap.value)
    })
    straps = [...checkedBoxValues]

    let filterByStrap = product_array.filter((data) => {
      return straps.some((strap) => {
        return data.strap === strap
      })
    })

    return filterByStrap
  }

  //filter size
  function filterSize() {

    let checkedBoxValues = []
    let filterSize = document.querySelectorAll('input[name="size"]:checked')
    filterSize.forEach((size) => {
      checkedBoxValues.push(size.value)
    })
    sizes = [...checkedBoxValues]

    let filterBySize = product_array.filter((data) => {
      return sizes.some((size) => {
        switch (size) {
          case "-32":
            return data.size < 32
          case "32-40":
            return data.size >= 32 && data.size <= 40
          case "+40":
            return data.size > 40
        }
      })
    })

    return filterBySize
  }

  // filter movement
  function filterMov() {

    let checkedBoxValues = []
    let filterMov = document.querySelectorAll('input[name="mov"]:checked')
    filterMov.forEach((mov) => {
      checkedBoxValues.push(mov.value)
    })
    moventment = [...checkedBoxValues]

    let filterByMov = product_array.filter((data) => {
      return moventment.some((mov) => {
        return data.movement === mov
      })
    })

    return filterByMov
  }

  //filter price
  function filterPrice() {

    let checkedBoxValues = []
    let filterPrices = document.querySelectorAll('input[name="price"]:checked')
    filterPrices.forEach((price) => {
      checkedBoxValues.push(price.value)
    })
    prices = [...checkedBoxValues]

    let filterByPrice = product_array.filter((data) => {
      return prices.some((price) => {
        switch (price) {
          case "-500":
            return data.price < 500
          case "500-1000":
            return data.price >= 500 && data.price <= 1000
          case "+1000":
            return data.price > 1000
        }
      })
    })
    return filterByPrice
  }

  function filterProducts() {
    let sizeFilter = filterSize()
    let strapFilter = filterStrap()
    let movFilter = filterMov()
    let priceFilter = filterPrice()

    let combinedFilter = [...sizeFilter, ...strapFilter, ...movFilter, ...priceFilter]

    sizeFilter.length === 0 ? true : combinedFilter = [...combinedFilter.filter(n => {
      return sizeFilter.indexOf(n) !== -1
    })]
    strapFilter.length === 0 ? true : combinedFilter = [...combinedFilter.filter(n => {
      return strapFilter.indexOf(n) !== -1
    })]
    movFilter.length === 0 ? true : combinedFilter = [...combinedFilter.filter(n => {
      return movFilter.indexOf(n) !== -1
    })]
    priceFilter.length === 0 ? true : combinedFilter = [...combinedFilter.filter(n => {
      return priceFilter.indexOf(n) !== -1
    })]

    finalFilter = [...new Set(combinedFilter.map(item => item))]
    renderData(finalFilter)
  }
})

function start() {
  getData(function (data) {
    renderData(data.product)
    const showProduct = document.getElementById('showProduct').onclick = function () {
      renderData(data.product)
    }

  })
}
start()
