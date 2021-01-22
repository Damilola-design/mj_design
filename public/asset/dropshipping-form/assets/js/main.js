// Category toggler
let categoriesItems = document.querySelectorAll('.step-category__nav-item');
let categoriesLists = document.querySelectorAll('.step-category-list');


const toggleCategory = function () {
    for (const categoryItem of categoriesItems) {
        categoryItem.addEventListener('click', function (e) {
            let categoryNumber = this.getAttribute('data-category');

            for (const categoryItem of categoriesItems) {
                categoryItem.classList.remove('step-category__nav-item--active');
            }
            categoryItem.classList.add('step-category__nav-item--active');

            for (const categoryList of categoriesLists) {
                if (categoryList.getAttribute('data-category-list') == categoryNumber) {
                    categoryList.classList.add('step-category-list--active');
                } else {
                    categoryList.classList.remove('step-category-list--active');
                }
            }
        })
    }
}

// Add/Remove product with checkbox
const toggleProduct = function () {
    let tableBody = $('.data-table tbody');

    let productCategory = $(this).closest('.step-category-list').attr('data-category');
    let productName = $(this).closest('label').text();
    let productId = $(this).find('label').attr('for');

    let tableRow = `<tr
    class="data-table__row data-table__row--color-2 data-table__row--radius-top" data-row-id="${productId}">
    <td class="data-table__column data-table__column-category" data-column="category">
        ${productCategory}</td>
    <td class="data-table__column data-table__column-item"
        data-column="item">${productName}</td>
    <td class="data-table__column data-table__column-input data-table__column data-table__column-input--products"
        data-column="input-products">
        <input type="text" name="#" id="input-products"
            class="has-custom-focus" value="" placeholder="#"
            required="" maxlength="3">
    </td>

    <td class="data-table__column data-table__column-amount" style="display: none;"><div></div></td>
    <td class="data-table__column data-table__column-percentage" style="display: none;"><div></div></td>

    <td class="data-table__column data-table__column-input data-table__column-input--percentage"
        data-column="input-percentage"><input type="text" name="%"
            id="input-percentage" class="has-custom-focus" value="%"
            placeholder="%" required="" maxlength="3">
    </td>
    <td class="data-table__column data-table__column-actions">
        <div class="data-table__action data-table__action-edit" data-action="edit" style="display:none;">
            <img src="./assets/icons/edit.png" alt="edit">
            <a>Edit</a>
        </div>
        <div class="data-table__action data-table__action-save"
            data-action="save">
            <img src="./assets/icons/save.png" alt="save">
            <a>Save</a>
        </div> |
        
        <div class="data-table__action data-table__action-delete"
            data-action="delete">
            <img src="./assets/icons/trash.png" alt="delete"></img>
        </div>
    </td>
</tr>`;

    if ($(this).find('input').prop('checked')) {
        tableBody.append(tableRow);
    } else {
        $(`[data-row-id="${productId}"]`).remove();
    }
}

// Save product
const saveProduct = function () {
    let product = $(this).closest('.data-table__row');
    let productsAmount = product.find('[data-column="input-products"] input').val();
    let productPercentage = product.find('[data-column="input-percentage"] input').val();
    let convertedProductPercentage = productPercentage.replace(/\D+/g, '');

    let productAmountColumn = product.find('.data-table__column-amount');
    let productPercnetageColumn = product.find('.data-table__column-percentage');

    productsAmount == '' ? productAmountColumn.find('div').text('0 Products') : productAmountColumn.find('div').text(`${productsAmount} Products`);
    productsAmount == '' ? productPercnetageColumn.find('div').text('0%') : productPercnetageColumn.find('div').text(`${convertedProductPercentage}%`);


    product.removeClass('data-table__row--color-2').addClass('data-table__row--color-3');
    product.find('[data-column="input-products"]').hide();
    product.find('[data-column="input-percentage"]').hide();

    product.find('[data-action="edit"]').show();
    product.find('[data-action="save"]').hide();
    productAmountColumn.show();
    productPercnetageColumn.show();
}

// Edit product
const editProduct = function () {
    let product = $(this).closest('.data-table__row');
    let productAmountColumn = product.find('.data-table__column-amount');
    let productPercnetageColumn = product.find('.data-table__column-percentage');

    product.removeClass('data-table__row--color-3').addClass('data-table__row--color-2');
    product.find('[data-column="input-products"]').show();
    product.find('[data-column="input-percentage"]').show();

    product.find('[data-action="edit"]').hide();
    product.find('[data-action="save"]').show();
    productAmountColumn.hide();
    productPercnetageColumn.hide();
}

// Delete product
const deleteProduct = function () {
    let product = $(this).closest('.data-table__row');
    let productName = product.attr('data-row-id');
    productName = productName.replace(/\s/g, '');

    let checkbox = $('.step-category-item__label').find(`input[id="${productName}"]`);
    console.log(checkbox)

    checkbox.prop('checked', false);
    product.remove();
}

const toggleLabel = function () {
    setTimeout(function() {
        if ($('.data-table__row').length > 0) {
            $('.step-category__label').hide();
        } else {
            $('.step-category__label').show();
        }
    })
}



const init = function () {
    toggleCategory();
    $('.step-category-item__label').on('change', toggleProduct);
    $(document).on('click', '[data-action="save"]', saveProduct);
    $(document).on('click', '[data-action="edit"]', editProduct);
    $(document).on('click', '[data-action="delete"]', deleteProduct);
    $(document).on('click', toggleLabel);
}

init();