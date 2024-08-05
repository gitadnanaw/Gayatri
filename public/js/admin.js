if(document.querySelectorAll('.responsive-table')) {
    document.querySelectorAll('.responsive-table').forEach((el) => {

        let headerArr = [];
        el.querySelectorAll('thead th').forEach((th) => {
            headerArr.push(th.innerHTML);
        });

        el.querySelectorAll('tbody tr').forEach((tr) => {
            let count = 0;
            tr.querySelectorAll('td').forEach((td) => {
                let p = document.createElement("p");
                p.classList.add('faux-th');
                p.innerText = headerArr[count];
                td.prepend(p);
                count++;
            });
        });

    });
}