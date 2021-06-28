let projectItem = []
let projectItemEdit = []
let projectAmount = 0

function createNewItem() {
    let displayItem = document.querySelector('#create-project-item')
    let displayList = document.querySelector('#project-item-list')
    displayItem.style.display = displayItem.style.display === 'none' ?  'block' : 'none'
    displayList.style.display = displayItem.style.display === 'block' ? 'none' : 'block'
}

function cancelNewItem() {
    document.querySelector('#create-project-item').style.display = 'none'
    document.querySelector('#project-item-list').style.display = 'block'
    
    document.querySelector('#item-name').setAttribute("class", "form-control")
    document.querySelector('#item-type').setAttribute("class", "form-control")
    document.querySelector('#item-provider').setAttribute("class", "form-control")
    document.querySelector('#item-amount').setAttribute("class", "form-control")
}

function ProjectItemValidate(name, type, provider, amount) {
    return name !== '' && type !== '' && provider !== '' && amount !== '' ? true : false
}

function addNewItem(){
    let name = document.querySelector('#item-name').value
    let type = document.querySelector('#item-type').value
    let provider = document.querySelector('#item-provider').value
    let amount = document.querySelector('#item-amount').value
    let description = document.querySelector('#item-description').value

    if(ProjectItemValidate(name, type, provider, amount)) {
        projectItem.push({name: name, type: type, provider: provider, amount: amount, description: description})

        document.querySelector('#create-project-item').style.display = 'none'
        document.querySelector('#project-item-list').style.display = 'block'
        // document.querySelector('#test-item').innerHTML = JSON.stringify(projectItem)
        document.querySelector('#project-item').value = JSON.stringify(projectItem)
    
        loadProjectItem()
        clearItemInput()
    }else{
        document.querySelector('#item-name').setAttribute("class", "form-control border-danger")
        document.querySelector('#item-type').setAttribute("class", "form-control border-danger")
        document.querySelector('#item-provider').setAttribute("class", "form-control border-danger")
        document.querySelector('#item-amount').setAttribute("class", "form-control border-danger")
    }
    
}

function loadProjectItem() {
    document.getElementById('item-list').innerHTML = ""
    projectAmount = 0

    projectItem.forEach((item, index) => {
        let li = document.createElement("li");
        li.setAttribute("class", "border-bottom py-2 text-secondary fs--13")
        li.innerHTML = "<strong class='text-dark'>รายการ</strong> : " + item.name + " | <strong class='text-dark'>ประเภท</strong> : " + item.type + " | <strong class='text-dark'>ราคา</strong> : <span class='text-success'>" + formatNumber(item.amount) + "</span>฿ <button class='btn btn-danger btn-vv-sm ml-3' title='Delete Item?' onClick='deleteProjectItem(" + index + ")'>x</button>"
        document.getElementById("item-list").appendChild(li)

        calculateProjectAmount(item.amount)
    })
}

function calculateProjectAmount(amount) {
    projectAmount += parseInt(amount)

    document.getElementById('project-amount').innerHTML = "<strong class='text-success'>" + formatNumber(projectAmount) + "</strong>"
}

function deleteProjectItem(index) {
    projectItem.splice(index, 1);

    loadProjectItem()
    calculateProjectAmount(0)
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

function clearItemInput() {
    document.querySelector('#item-name').value = ''
    document.querySelector('#item-type').value = ''
    document.querySelector('#item-provider').value = ''
    document.querySelector('#item-amount').value = ''
    document.querySelector('#item-description').value = ''

    document.querySelector('#item-name').setAttribute("class", "form-control")
    document.querySelector('#item-type').setAttribute("class", "form-control")
    document.querySelector('#item-provider').setAttribute("class", "form-control")
    document.querySelector('#item-amount').setAttribute("class", "form-control")
}

function showDataEditProject(items, project, customer) {
    if(items !== null) {
        let item = JSON.parse(items)
        let tbodyRef = document.querySelector('#project-items-table').getElementsByTagName('tbody')[0]
        document.querySelector('#show-project-name').innerHTML = project
        document.querySelector('#show-project-customer').innerHTML = customer

        while (tbodyRef.childNodes.length) {
            tbodyRef.removeChild(tbodyRef.childNodes[0]);
        }

        for(i = 0; i < item.length; i++) {
            let description = item[i].description !== null ? item[i].description : '-'
            
            let newRow = tbodyRef.insertRow(i)
            newRow.insertCell(0).innerHTML = i + 1
            newRow.insertCell(1).innerHTML = item[i].name + '<p class="fs--12 mb-0 text-secondary">รายละเอียด : ' + description + '</p>'
            newRow.insertCell(2).innerHTML = '<center>' + item[i].type + '</center>'
            newRow.insertCell(3).innerHTML = '<center>' + item[i].provider_name + '</center>'
            newRow.insertCell(4).innerHTML = '<center>' + formatNumber(item[i].amount) + '</center>'
        }
    }
}

function setDataEditProject(key) {
    let elem = document.querySelector('#edit-project-btn_'+key)
    // let amount = elem.dataset.totalamt.split('.')
    document.querySelector('#edit-name').value = elem.dataset.name
    document.querySelector('#edit-customer').value = elem.dataset.customer
    document.querySelector('.edit-doc').value = convertFormatDate(elem.dataset.docdate)
    document.querySelector('.edit-start').value = convertFormatDate(elem.dataset.startdate)
    document.querySelector('.edit-end').value = convertFormatDate(elem.dataset.enddate)
    document.querySelector('#edit-description').value = elem.dataset.description
    document.querySelector('#edit-project-id').value = elem.dataset.id
}

function convertFormatDate(date) {
    let currentDate = date.split('-')
    return currentDate[2] + '/' + currentDate[1] + '/' + currentDate[0]
}

function setItemEditProject(project_items) {
    let items = JSON.parse(project_items)
    let totalamt = 0
    document.getElementById('edit-item-list').innerHTML = ""

    items.forEach((item, index) => {
        let item_amount = parseInt(item.amount)
        totalamt += item_amount
        let li = document.createElement("li");
        li.setAttribute("class", "border-bottom py-2 text-secondary fs--13")
        li.innerHTML = "<strong class='text-dark'>รายการ</strong> : " + item.name + " | <strong class='text-dark'>ประเภท</strong> : " + item.type + " | <strong class='text-dark'>ราคา</strong> : <span class='text-success'>" + formatNumber(item_amount) + "</span> ฿ <button class='btn btn-danger btn-vv-sm ml-3' title='Delete Item?' onClick='editProjectItem(" + index + ", " + project_items + ")'>x</button>"
        document.getElementById("edit-item-list").appendChild(li)
    })

    document.querySelector('#edit-project-amount').innerHTML = "<strong class='text-success'>" + formatNumber(totalamt) + "</strong>"

    return totalamt
}

function editProjectItem(key, project_items) {
    let item = project_items
    item.splice(key, 1)
    document.querySelector('#edit-project-item').value = JSON.stringify(item)
    setItemEditProject(JSON.stringify(item))
}

function getProjectName(key, id) {
    let name = document.querySelector('#project_id_'+key+' > td > strong').innerText
    document.querySelector('#project-new-item-name').innerHTML = name
    document.querySelector('#project-id_new-item').value = id
}