(function (doc) {
    var ex1, ex2, ex3, pr1, pr2, pr3, expanded;

    setTimeout(function () { init(); }, 1000);

    function expand(el) {
        if (expanded) {
            pr1.classList.remove('Proj-hidden');
            pr1.classList.remove('Proj-expanded');
            pr2.classList.remove('Proj-hidden');
            pr2.classList.remove('Proj-expanded');
            pr3.classList.remove('Proj-hidden');
            pr3.classList.remove('Proj-expanded');
            expanded = false;
        }else{
            if (el === 1) {
                pr2.classList.add('Proj-hidden');
                pr3.classList.add('Proj-hidden');
                pr1.classList.add('Proj-expanded');
                expanded = true;
            }
            if (el === 2) {
                pr1.classList.add('Proj-hidden');
                pr3.classList.add('Proj-hidden');
                pr2.classList.add('Proj-expanded');
                expanded = true;
            }
            if (el === 3) {
                pr2.classList.add('Proj-hidden');
                pr1.classList.add('Proj-hidden');
                pr3.classList.add('Proj-expanded');
                expanded = true;
            }
        }
    }

    function init() {
        initVars();
        bindEvents();
    }

    function initVars() {
        pr1 = doc.getElementById('p1');
        pr2 = doc.getElementById('p2');
        pr3 = doc.getElementById('p3');
        ex1 = doc.getElementById('e1');
        ex2 = doc.getElementById('e2');
        ex3 = doc.getElementById('e3');
        expanded = false;
    }

    function bindEvents() {
        ex1.addEventListener('click', function () { expand(1); }, false)
        ex2.addEventListener('click', function () { expand(2); }, false)
        ex3.addEventListener('click', function () { expand(3); }, false)
    }
}(document));