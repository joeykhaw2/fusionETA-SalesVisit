<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Visit Information</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
      body {
        background-color: #FFF3D2;
        background-size: cover;
        background-repeat: no-repeat;
      }

      h2.title {
        color: #5B5B5B;
        font-weight: bold;
      }

      p.section-name {
        color: #5B5B5B;
        font-weight: bold;
        font-size: 20px;
      }

      #nextBtn1 {
        background-color: #EE5828;
      }

      #nextBtn2 {
        background-color: #EE5828;
      }

      #addInterflourProductBtn {
        background-color: #EE5828;
      }

      #addInterflourProductBtn:hover {
        background-color: #FE541E;
      }

      #saveInterflourProductBtn {
        background-color: #EE5828;
      }

      #submitFormButton {
        background-color: #EE5828;
      }

      .custom-rounded-container {
        background-color: rgba(255, 255, 255, 0.7);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0px 0px 10px 10px;
      }

      .product-container {
        border-radius: 10px 10px 10px 10px;
      }

      .nav-tabs {
        display: flex;
        width: 100%;
        justify-content: space-between;
      }

      .nav-item {
        flex: 1;
      }

      .nav-link {
        text-align: center;
        font-weight: bold;
        color: #2C2FAC;
      }

      #noProductsText1 {
        font-weight: bold;
      }

      .nav-link.active {
        background-color: rgba(255, 255, 255, 0.7) !important; /* bg color for the active tab */
        color: #FE541E !important; /* text color for the active tab */
        border-radius: 10px 10px 0px 0px;
      }
    </style> 
</head>

<body>
  <input type="hidden" id="id" value="<?php echo isset($_GET['ticketId']) ? htmlspecialchars($_GET['ticketId']) : ''; ?>">

  <br>
  <div class="container">
    <!-- Logo -->
    <div class="text-center">
      <img src="https://raw.githubusercontent.com/chewshanyu/fusion/main/FusionETA.png" alt="Logo" class="img-fluid my-3" style="max-width: 300px;">
    </div>
    <br>
    <!-- Title -->
    <h2 class="title text-center">Sales Visit Information</h2>
    <br>

<!-- Tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="section1-tab" data-bs-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">1</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="section2-tab" data-bs-toggle="tab" href="#section2" role="tab" aria-controls="section2" aria-selected="false">2</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="section3-tab" data-bs-toggle="tab" href="#section3" role="tab" aria-controls="section3" aria-selected="false">3</a>
  </li>
</ul>

<!-- Tab Content -->
<div class="tab-content" id="myTabContent">
  <!-- Section 1 -->
  <div class="tab-pane fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
        <!-- Section 1 -->
        <div class="section-container" id="section1">
            <div class="container custom-rounded-container p-4">
                <p class="section-name">Visit Details</p>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="" disabled selected>Select One</option>    
                            <option value="1">Regular Visit</option>
                            <option value="2">Selling</option>
                            <option value="3">Selling - Blitz</option>
                            <option value="4">Sampling</option>
                            <option value="5">Stocklist</option>
                            <option value="6">Others</option>
                        </select>
                        <label for="floatingSelect">Visit Type</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="text" id="visitDate" placeholder="Visit Date" value="<?php echo date('Y-m-d'); ?>"
                            readonly class="form-control" disabled>
                        <label for="visitDate">Visit Date</label>
                    </div>
            </div>
            <br>
            <button type="button" id="nextBtn1" class="btn btn-primary d-block mx-auto">Next</button>
        </div>
  </div>

<!-- Section 2 -->
<div class="tab-pane fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
  <div class="section-container" id="section2">
    <div class="container custom-rounded-container p-4">
      <p class="section-name">Store Details</p>
      
      <div class="form-floating">
        <select class="form-select" id="cusTypefloatingSelect" aria-label="Floating label select example">
            <option value="" disabled selected>Select One</option>    
            <option value="1">End Customer</option>
            <option value="2">Outlet</option>
            <option value="3">Distributor</option>
            <option value="4">Grosir</option>
        </select>
        <label for="cusTypefloatingSelect">Customer Type</label>
    </div>
    <br>

    <div class="form-floating">
        <select class="form-select" id="storeStatusfloatingSelect" aria-label="Floating label select example">
            <option value="" disabled selected>Select One</option>    
            <option value="1">Newly Opened Outlet</option>
            <option value="2">Existing Store</option>
        </select>
        <label for="storeStatusfloatingSelect">Store Status</label>
    </div>
    <br>

      <div class="form-floating mb-3">
          <input type="text" id="stores" list="storeOptions" autocomplete="off" placeholder="Store Name" class="form-control">
          <datalist id="storeOptions"></datalist>
          <label for="stores">Store Name</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="owner" placeholder="PIC/Owner" class="form-control"></textarea>
        <label for="owner">PIC/Owner</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="contact" placeholder="Contact Number" class="form-control"></textarea>
        <label for="contact">Contact Number</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="add1" placeholder="Address 1" class="form-control"></textarea>
        <label for="add1">Address 1</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="add2" placeholder="Address 2" class="form-control"></textarea>
        <label for="add2">Address 2</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="add3" placeholder="Address 3" class="form-control"></textarea>
        <label for="add3">Address 3</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" id="area" list="areaOptions" autocomplete="off" placeholder="Area (Province)" class="form-control">
        <datalist id="areaOptions"></datalist>
        <label for="area">Area (Province)</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="postcode" placeholder="Postcode" class="form-control"></textarea>
        <label for="postcode">Postcode</label>
      </div>

      <div class="form-floating mb-3">
        <textarea cols="30" id="city" placeholder="City" class="form-control"></textarea>
        <label for="city">City</label>
      </div>

      <div class="form-floating">
        <select class="form-select" id="businessTypefloatingSelect" aria-label="Floating label select example">
            <option value="" disabled selected>Select One</option>    
            <option value="1">Bakery</option>
            <option value="2">Noodles</option>
        </select>
        <label for="businessTypefloatingSelect">Business Type</label>
      </div>

    </div>
    <br>
    <button type="button" id="nextBtn2" class="btn btn-primary d-block mx-auto">Next</button>
    <br>    
</div>
</div>

  <!-- Section 3 -->
  <div class="tab-pane fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
    <div class="section-container" id="section3">
        <div class="container custom-rounded-container p-4">
            <p class="section-name">Interflour Product</p>
            <p id="noProductsText1" class="text-center">No Products Yet</p>
            <p id="noProductsText2" class="text-center">Add a product by clicking on the add button below.</p>
            <div id="productContainer" class="product-container"></div>
            <!-- Button trigger modal -->
            <button type="button" id="addInterflourProductBtn" class="btn btn-primary d-block mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Product
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product</h1>
                    <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <div class="form-floating mb-3">
                    <input type="text" textarea cols="30" id="product" list="productOptions" placeholder="Product Name" class="form-control"></textarea>
                    <datalist id="productOptions"></datalist>
                    <label for="product">Product Name</label>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea cols="30" id="IntProductQty" placeholder="Quantity" class="form-control"></textarea>
                    <label for="IntProductQty">Quantity</label>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="saveInterflourProductBtn" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <br>
      <button type="button" id="submitFormButton" class="btn btn-primary d-block mx-auto">Submit</button>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var myTab = new bootstrap.Tab(document.getElementById('myTab'));

    // Function to navigate to the next section
    function goToSection(sectionNumber) {
      var tabSelector = '#section' + sectionNumber + '-tab';
      var myTab = new bootstrap.Tab(document.querySelector(tabSelector));
      myTab.show();
    }

    // Hide or show the "No Products" text based on the presence of products [Interflour]
    var addInterflourProductBtn = document.getElementById('addInterflourProductBtn');
    var noProductsText1 = document.getElementById('noProductsText1');
    var noProductsText2 = document.getElementById('noProductsText2');

    // Handle saving the product details and displaying them in the container [Interflour]
    var saveInterflourProductBtn = document.getElementById('saveInterflourProductBtn');
    var productContainer = document.getElementById('productContainer');
    var noProductsText1 = document.getElementById('noProductsText1');
    var noProductsText2 = document.getElementById('noProductsText2');
    var productNameInput = document.getElementById('product');
    var productQtyInput = document.getElementById('IntProductQty');

    // Counter to keep track of the product number [Interflour]
    var productCounter = 1;

  	// Array to store product details (product name and quantity)
    const productArray = [];

    // Handle save button clicked [Interflour]
    saveInterflourProductBtn.addEventListener('click', function() {
      var productName = productNameInput.value.trim();
      var productQty = productQtyInput.value.trim();

      var productItem = {
        productName: productName,
        productQty: productQty
      };

      productArray.push(productItem);
      console.log(productArray);

      if (productName !== '' && productQty !== '') {
        var productDetailsContainer = document.createElement('div');
        productDetailsContainer.classList.add('custom-rounded-container', 'p-3', 'mb-3', 'bg-white', 'product-details-container');
        productDetailsContainer.style.borderRadius = '10px';

        // Create the trash icon for removing the product
        var trashIcon = document.createElement('i');
        trashIcon.classList.add('fas', 'fa-trash-alt', 'product-remove-icon');
        trashIcon.addEventListener('click', function() {
          // Remove the product details container when the trash icon is clicked
          productDetailsContainer.remove();

          // Reassign product numbers and update the UI
          reassignProductNumbers();

          // Check if there are no more product containers
          if (productContainer.childElementCount === 0) {
              noProductsText1.style.display = 'block';
              noProductsText2.style.display = 'block';
          }
        });

        // Create the title element for the product
        var productTitle = document.createElement('p');
        productTitle.classList.add('product-title'); 
        productTitle.textContent = 'Product ' + productCounter;
        productTitle.style.fontWeight = 'bold';
        productTitle.style.marginBottom = '0';
        productTitle.style.color = '#00567D';

        // Create a single line element for product details
        var productDetails = document.createElement('p');
        productDetails.classList.add('product-details'); 
        productDetails.textContent = ' Product Name: ' + productName + '  ,  ' + 'Quantity: ' + productQty;
        productDetails.style.fontSize = '12px';
        productDetails.style.marginBottom = '0';

        // Append the elements to the container
        productDetailsContainer.appendChild(trashIcon);
        productDetailsContainer.appendChild(productTitle);
        productDetailsContainer.appendChild(productDetails);
        productContainer.appendChild(productDetailsContainer);

        // Increment the product counter
        productCounter++;

        // Clear the input fields after saving
        productNameInput.value = ''; 
        productQtyInput.value = '';

        // Hide the "No Products" text
        noProductsText1.style.display = 'none';
        noProductsText2.style.display = 'none';

        // Close the modal by simulating a click on the close button
        var closeModalButton = document.getElementById('closeModal');
        closeModalButton.click();
      }
    });

    // Function to reassign product numbers [Interflour]
    function reassignProductNumbers() {
      var productTitles = document.querySelectorAll('.product-title');
      productCounter = 1;

      productTitles.forEach(function (title) {
        title.textContent = 'Product ' + productCounter;
        productCounter++;
      });
    }

    // Handle the "Next" button clicks for each section
    var nextBtn1 = document.getElementById('nextBtn1');
    var nextBtn2 = document.getElementById('nextBtn2');

    nextBtn1.addEventListener('click', function() {
      goToSection(2);
    });

    nextBtn2.addEventListener('click', function() {
      goToSection(3);
    });

    var submitBtn = document.getElementById('submitFormButton');

  const nextButton = document.getElementById("nextBtn1");
  const nextButton2 = document.getElementById("nextBtn2");
  const submitButton = document.getElementById("submitFormButton");

  // variable to store deal ID
  let dealID;

  const section1Data = {
    visitType: null,
    visitDate: null,
  };

  const section2Data = {
      customerType: null,
      storeStatus: null,
      storeName: null,
      owner: null,
      contactNumber: null,
      address1: null,
      address2: null,
      address3: null,
      area: null,
      postcode: null,
      city: null,
      businessType: null,
  };

  nextButton.addEventListener("click", async function () {
    const selectedOption = document.getElementById("floatingSelect").options[document.getElementById("floatingSelect").selectedIndex];
    const visitDate = document.getElementById("visitDate").value;

    const visitTypeText = selectedOption.textContent;

    const visitTypeMapping = {
      "Regular Visit": 2108,
      "Selling": 2110,
      "Selling - Blitz": 2112,
      "Sampling": 2114,
      "Stocklist": 2116,
      "Others": 2118
    };

    const visitType = visitTypeMapping[visitTypeText];

    section1Data.visitType = visitType;
    section1Data.visitDate = visitDate;
  });

  nextButton2.addEventListener("click", async function () {
    const selectedOption1 = document.getElementById("cusTypefloatingSelect").options[document.getElementById("cusTypefloatingSelect").selectedIndex];
    const selectedOption2 = document.getElementById("storeStatusfloatingSelect").options[document.getElementById("storeStatusfloatingSelect").selectedIndex];
    const storeName = document.getElementById("stores").value;
    const owner = document.getElementById("owner").value;
    const contactNumber = document.getElementById("contact").value;
    const address1 = document.getElementById("add1").value;
    const address2 = document.getElementById("add2").value;
    const address3 = document.getElementById("add3").value;
    const area = document.getElementById("area").value;
    const postcode = document.getElementById("postcode").value;
    const city = document.getElementById("city").value;
    const selectedOption3 = document.getElementById("businessTypefloatingSelect").options[document.getElementById("businessTypefloatingSelect").selectedIndex];

    const cusTypeText = selectedOption1.textContent;
    const storeStatusText = selectedOption2.textContent;
    const businessTypeText = selectedOption3.textContent;

    const cusTypeMapping = {
      "End Customer": 2160,
      "Outlet": 2162,
      "Distributor": 2164,
      "Grosir": 2166
    };

    const storeStatusMapping = {
      "Newly Opened Outlet": 2168,
      "Existing Store": 2170
    };

    const businessTypeMapping = {
      "Bakery": 2172,
      "Noodles": 2174
    };

    const customerType = cusTypeMapping[cusTypeText];
    const storeStatus = storeStatusMapping[storeStatusText];
    const businessType = businessTypeMapping[businessTypeText];
    
    section2Data.customerType = customerType;
    section2Data.storeStatus = storeStatus;
    section2Data.storeName = storeName;
    section2Data.owner = owner;
    section2Data.contactNumber = contactNumber;
    section2Data.address1 = address1;
    section2Data.address2 = address2;
    section2Data.address3 = address3;
    section2Data.area = area;
    section2Data.postcode = postcode;
    section2Data.city = city;
    section2Data.businessType = businessType;
  });

  submitButton.addEventListener("click", async function () {

    window.location.href = "siteVisitFormSubmissionConfirmation.php";
    
    const visitType = section1Data.visitType;
    const visitDate = section1Data.visitDate;

    const customerType = section2Data.customerType;
    const storeStatus = section2Data.storeStatus;
    const storeName = section2Data.storeName;
    const owner = section2Data.owner;
    const contactNumber = section2Data.contactNumber;
    const address1 = section2Data.address1;
    const address2 = section2Data.address2;
    const address3 = section2Data.address3;
    const area = section2Data.area;
    const postcode = section2Data.postcode;
    const city = section2Data.city;
    const businessType = section2Data.businessType;

    // create new deal with section 1 info 
    const url1 = 'https://fusioneta.bitrix24.com/rest/39/2k2mww3ih9jxzioo/crm.deal.add.json';
    const requestData1 = {
      fields: {
        CATEGORY_ID: 42,
        UF_CRM_1693286895426: visitType,
        UF_CRM_1693286917579: visitDate
      }
    };

    try {
      const response = await fetch(url1, {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(requestData1)
      });

      const responseData = await response.json();
      console.log("API response for section 1:", responseData);

      // Retrieve the deal ID from API response
      if (responseData.result) {
        dealID = responseData.result;
        console.log("Deal ID:", dealID);
      }
      } catch (error) {
        console.error("API error for section 1:", error);
      }

    // create new SPA record to store section 2 info
    const url2 = 'https://fusioneta.bitrix24.com/rest/39/2k2mww3ih9jxzioo/crm.item.add.json?entityTypeId=182' +
    '&fields[ufCrm40_1693375016]=' + customerType +
    '&fields[ufCrm40_1693375103]=' + storeStatus +
    '&fields[title]=' + storeName +
    '&fields[ufCrm40_1693375182]=' + owner +
    '&fields[ufCrm40_1693375197]=' + contactNumber +
    '&fields[ufCrm40_1693375212]=' + address1 +
    '&fields[ufCrm40_1693375221]=' + address2 +
    '&fields[ufCrm40_1693375228]=' + address3 +
    '&fields[ufCrm40_1693375245]=' + area +
    '&fields[ufCrm40_1693375304]=' + postcode +
    '&fields[ufCrm40_1693375273]=' + city +
    '&fields[ufCrm40_1693375322]=' + businessType;
    try {
      const res = await fetch(url2); 
      const res_data = await res.json(); 
      console.log("API response for section 2:", res_data);
    } catch (error) {
      console.log(error);
    }
    
    // send section 3 data - associate products with deal
    try {
      const productDetails = [];

      const productMappings = {
        'Bitrix24 Professional': { PRODUCT_ID: 1634, PRICE: 10000 },
        'Bitrix24 Standard': { PRODUCT_ID: 1630, PRICE: 5000 },
        'Gatotkaca 1kg': { PRODUCT_ID: 482, PRICE: 40 },
        'Kompas 1kg': { PRODUCT_ID: 476, PRICE: 55 },
        'ABCD': { PRODUCT_ID: 1678, PRICE: 20 },
      };

      productArray.forEach(productsItem => {
        const productName = productsItem.productName;
        const productQuantity = productsItem.productQty;
        const productInfo = productMappings[productName] || null; // Set to null if product not found (new product)
        productDetails.push({ 
          PRODUCT_ID: productInfo.PRODUCT_ID,
          QUANTITY: productQuantity,
          PRICE: productInfo.PRICE,
        });      
    });

      console.log(productDetails);

      // Transmit product details to Bitrix24
      if (productDetails.length > 0 && dealID) {
        const setProductRowsUrl = `https://fusioneta.bitrix24.com/rest/39/2k2mww3ih9jxzioo/crm.deal.productrows.set.json?ID=${dealID}`;
        const productRowsData = {
          rows: productDetails,
        };

        const productRowsResponse = await fetch(setProductRowsUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(productRowsData),
        });

        const productRowsResponseData = await productRowsResponse.json();
        console.log('API response for setting product rows:', productRowsResponseData);
      } else {
        console.error("Deal ID is missing. Section 1 might not have been successful.")
      } 
    } catch (error) {
      console.error('API error:', error);
    }
  });

  //fetch store list
  const inputElement = document.getElementById("stores");
  const datalistElement = document.getElementById("storeOptions");

  const fetchItems = async (start = 0) => {
      try {
          const response = await fetch(`https://fusioneta.bitrix24.com/rest/39/2k2mww3ih9jxzioo/crm.item.list.json?entityTypeId=182&start=${start}`);
          const data = await response.json();
          return data.result.items;
      } catch (error) {
          console.log(error);
          return [];
      }
  };

  const populateDatalist = async () => {
    datalistElement.innerHTML = "";

    let start = 0;
    let allItems = [];

    while (true) {
      const items = await fetchItems(start);
      if (items.length === 0) {
        break;
      }

      for (const item of items) {
        // Check if the item title is already in the allItems array
        const isDuplicate = allItems.some(existingItem => existingItem.title === item.title);

        if (!isDuplicate) {
          allItems.push(item);
          const optionElement = document.createElement("option");
          optionElement.value = item.title;
          optionElement.dataset.id = item.id;
          datalistElement.appendChild(optionElement);
        }
      }
      start += items.length;
    }
  };

  populateDatalist();

  //fetch product list
  const productInput = document.getElementById("product");
  const productDatalist = document.getElementById("productOptions");

  const fetchProductNames = async () => {
    try {
      const response = await fetch('https://fusioneta.bitrix24.com/rest/39/2k2mww3ih9jxzioo/crm.product.list.json');
      const data = await response.json();
      return data.result;
    } catch (error) {
      console.error("Failed to fetch product names:", error);
      return [];
    }
  };

  const populateProductDatalist = async () => {
    productDatalist.innerHTML = "";

    const productNames = await fetchProductNames();
    productNames.forEach(product => {
      const optionElement = document.createElement("option");
      optionElement.value = product.NAME;
      productDatalist.appendChild(optionElement);
    });
  };

  // Call the populateProductDatalist function when the modal is shown
  document.getElementById('exampleModal').addEventListener('shown.bs.modal', populateProductDatalist);

});
</script>

<style>
  .product-remove-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #00567D;
    cursor: pointer;
  }

  .product-details-container {
    position: relative;
  }

</style>
</body>
</html>
