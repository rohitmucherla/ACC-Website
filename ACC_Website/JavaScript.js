(function (doc) {
    var ex1,
        ex2,
        ex3,
        pr1,
        pr2,
        pr3,
        expanded,
        tabs11,
        tabs12,
        tabs13,
        tc11,
        tc12,
        tc13,
        tabs21,
        tabs22,
        tabs23,
        tc21,
        tc22,
        tc23,
        tabs31,
        tabs32,
        tabs33,
        tc31,
        tc32,
        tc33;

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

    function setTab(num) {
        if (num === 1) {
            tabs11.classList.add('active');
            tabs12.classList.remove('active');
            tabs13.classList.remove('active');
            tc11.classList.add('active-content');
            tc12.classList.remove('active-content');
            tc13.classList.remove('active-content');
        }
        if (num === 2) {
            tabs12.classList.add('active');
            tabs11.classList.remove('active');
            tabs13.classList.remove('active');
            tc12.classList.add('active-content');
            tc11.classList.remove('active-content');
            tc13.classList.remove('active-content');
        }
        if (num === 3) {
            tabs13.classList.add('active');
            tabs12.classList.remove('active');
            tabs11.classList.remove('active');
            tc13.classList.add('active-content');
            tc12.classList.remove('active-content');
            tc11.classList.remove('active-content');
        }
        if (num === 4) {
            tabs21.classList.add('active');
            tabs22.classList.remove('active');
            tabs23.classList.remove('active');
            tc21.classList.add('active-content');
            tc22.classList.remove('active-content');
            tc23.classList.remove('active-content');
        }
        if (num === 5) {
            tabs22.classList.add('active');
            tabs21.classList.remove('active');
            tabs23.classList.remove('active');
            tc22.classList.add('active-content');
            tc21.classList.remove('active-content');
            tc23.classList.remove('active-content');
        }
        if (num === 6) {
            tabs23.classList.add('active');
            tabs22.classList.remove('active');
            tabs21.classList.remove('active');
            tc23.classList.add('active-content');
            tc22.classList.remove('active-content');
            tc21.classList.remove('active-content');
        }
        if (num === 7) {
            tabs31.classList.add('active');
            tabs32.classList.remove('active');
            tabs33.classList.remove('active');
            tc31.classList.add('active-content');
            tc32.classList.remove('active-content');
            tc33.classList.remove('active-content');
        }
        if (num === 8) {
            tabs32.classList.add('active');
            tabs31.classList.remove('active');
            tabs33.classList.remove('active');
            tc32.classList.add('active-content');
            tc31.classList.remove('active-content');
            tc33.classList.remove('active-content');
        }
        if (num === 9) {
            tabs33.classList.add('active');
            tabs32.classList.remove('active');
            tabs31.classList.remove('active');
            tc33.classList.add('active-content');
            tc32.classList.remove('active-content');
            tc31.classList.remove('active-content');
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
        tabs11 = doc.getElementById('ts11');
        tabs12 = doc.getElementById('ts12');
        tabs13 = doc.getElementById('ts13');
        tc11 = doc.getElementById('tb11');
        tc12 = doc.getElementById('tb12');
        tc13 = doc.getElementById('tb13');
        tabs21 = doc.getElementById('ts21');
        tabs22 = doc.getElementById('ts22');
        tabs23 = doc.getElementById('ts23');
        tc21 = doc.getElementById('tb21');
        tc22 = doc.getElementById('tb22');
        tc23 = doc.getElementById('tb23');
        tabs31 = doc.getElementById('ts31');
        tabs32 = doc.getElementById('ts32');
        tabs33 = doc.getElementById('ts33');
        tc31 = doc.getElementById('tb31');
        tc32 = doc.getElementById('tb32');
        tc33 = doc.getElementById('tb33');
    }

    function bindEvents() {
        ex1.addEventListener('click', function () { expand(1); }, false);
        ex2.addEventListener('click', function () { expand(2); }, false);
        ex3.addEventListener('click', function () { expand(3); }, false);

        tabs11.addEventListener('click', function () { setTab(1); }, false);
        tabs12.addEventListener('click', function () { setTab(2); }, false);
        tabs13.addEventListener('click', function () { setTab(3); }, false);

        tabs21.addEventListener('click', function () { setTab(4); }, false);
        tabs22.addEventListener('click', function () { setTab(5); }, false);
        tabs23.addEventListener('click', function () { setTab(6); }, false);

        tabs31.addEventListener('click', function () { setTab(7); }, false);
        tabs32.addEventListener('click', function () { setTab(8); }, false);
        tabs33.addEventListener('click', function () { setTab(9); }, false);
    }
}(document));