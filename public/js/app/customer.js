function setDataEditCustomer(id, key) {
    let name = document.querySelector('#customer_id_'+key+' #customer_name > strong').innerText
    let company = document.querySelector('#customer_id_'+key+' #customer_company').innerText
    let mobile = document.querySelector('#customer_id_'+key+' #customer_mobile').innerText
    let description = document.querySelector('#customer_id_'+key+' #customer_description').innerText

    document.getElementById('customer-name').innerHTML = name
    document.getElementById('name-input').value = name
    document.getElementById('company-input').value = company
    document.getElementById('mobile-input').value = mobile
    document.getElementById('description-input').value = description
    document.getElementById('customer-id').value = id
}