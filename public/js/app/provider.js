function setDataEditProvider(id, key) {
    let name = document.querySelector('#provider_id_'+key+' #provider-name > strong').innerText
    let type = document.querySelector('#provider_id_'+key+' #provider-type').innerText
    let description = document.querySelector('#provider_id_'+key+' #provider-description').innerText

    document.getElementById('name-input').value = name
    document.getElementById('type-input').value = type
    document.getElementById('description-input').value = description
    document.getElementById('provider-id').value = id
}