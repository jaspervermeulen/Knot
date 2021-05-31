{
    const init = () => {
        console.log('START');
        document.querySelector('.scroll').addEventListener('click', handleClick);
        
        //document.querySelector('.form-submit').classList.add('has-js');

        //document.querySelectorAll('.filter__field').forEach($field => $field.addEventListener('input', handleInputField));

        
    }

    const handleInputField = () => {
        console.log('handleInputField');
        submitWithJS();
    }

    const submitWithJS = async () => {
        console.log('submitWithJS');
        const $form = document.querySelector('.filter-form');
        const data = new FormData($form);
        const entries = [...data.entries()];
        console.log('entries:', entries);
        const qs = new URLSearchParams(entries).toString();
        console.log('querystring', qs);
        const url = `${$form.getAttribute('action')}?${qs}`;
        console.log('url', url);

        const response = await fetch(url, {
            headers: new Headers({
                Accept: 'application/json'
            })
        });
        const items = await response.json();
        console.log(items);
        updateList(items);

        window.history.pushState(
            {},
            '',
            `${window.location.href.split('?')[0]}?${qs}`
        );
    }


    const updateList = items => {
        console.log('updateList')
        const $items = document.querySelector('.items');
        $items.innerHTML = '';

        items.foreach(item => {
            const $a = document.createElement('a');
            $a.innerHTML = `<article class="items__list">
                <p class="list__date">${item.day}<span class="list__date--month">${item.month}</span></p>
                <p class="list__place">${item.place}</p>
                <h3 class="list__title">${item.title}</h3>
                </article>
                </a>`;
            $a.setAttribute('href', `index.php?page=detail&id=${$item['id']}`);
            $a.classList.add('items__link');
            $items.appendChild($a);
        })
    }

    const handleClick = () => {
        window.scrollBy({
            top: 950,
            behavior: 'smooth',
        })
    }

    init();
}
