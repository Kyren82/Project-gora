function get_rest_api(){
    let URL = "http://localhost:3131/wp-json/wp/v2/korona";
    fetch(URL)
        .then(response => {
            if(!response.ok){
                throw new error("Response NOT ok :<");
            }
            return response.json();
        })
        .then(data => {
            data.forEach(el => {
                let li = document.createElement('li');
                li.classList.add('info-element');

                let title = document.createElement('h2');
                title.classList.add('info-element-title');
                title.textContent = el['title']['rendered'];
                li.appendChild(title);

                let id = document.createElement('p');
                id.classList.add('info-element-id');
                id.textContent = `id: ${el['id']}`;
                li.appendChild(id);

                let link = document.createElement('a');
                link.classList.add('info-element-link');
                link.setAttribute('href', el['link']);
                link.textContent = 'link: Tutaj →';
                li.appendChild(link);

                let status = document.createElement('p');
                status.classList.add('info-element-status');
                let color = (el['status'] == 'publish') ? '#75e339' : '#e25976';
                status.innerHTML = `status: <span style="color: ${color};"> ${el['status']} </span>`;
                li.appendChild(status);

                let type = document.createElement('p');
                type.classList.add('info-element-type');
                type.textContent = `type: ${el['type']}`;
                li.appendChild(type);
                
                document.querySelector('.info-element').appendChild(li);
            });
            document.querySelector('.info-element-text').textContent = `ilość elementów: ${data.length}`;
        })
        .catch(error => {
            console.log("error");
        })
}

get_rest_api();