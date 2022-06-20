const autoBtn = document.querySelectorAll('.auto');

autoBtn.forEach(onTabClick);

function onTabClick(item) {
    item.addEventListener('click', function() {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute('data-tab');
        let currentTab = document.querySelector(tabId);

        if(!currentBtn.classList.contains('active')){
            autoBtn.forEach(function(item) {
                item.classList.remove('active');
            });
    
            currentBtn.classList.add('active');
           
        }

        
    });
};

document.querySelector('.auto').click()

const serv1Btn = document.querySelectorAll('.vlt_servise');
serv1Btn.forEach(onTabClickVLTS1);

function onTabClickVLTS1(item) {
    item.addEventListener('click', function() {
        let currentBtn1 = item;
        let tabId = currentBtn1.getAttribute('data-tab');
        let currentTab = document.querySelector(tabId);

        if(!currentBtn1.classList.contains('active')){
            serv1Btn.forEach(function(item) {
                item.classList.remove('active');
            });
    
            currentBtn1.classList.add('active');
           
        }

        
    });
};
