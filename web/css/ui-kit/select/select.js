document.addEventListener('DOMContentLoaded', function() {
    var selects = document.querySelectorAll('.select');
    selects.forEach(function(select) {
        var selectOption = select.querySelectorAll('option');
        var selectOptionLength = selectOption.length;
        var selectedOption = Array.from(selectOption).find(option => option.selected);
        var duration = 450; // длительность анимации

        select.style.display = 'none';
        var selectWrapper = document.createElement('div');
        selectWrapper.className = 'select';
        select.parentNode.insertBefore(selectWrapper, select);
        selectWrapper.appendChild(select);

        var newSelect = document.createElement('div');
        newSelect.className = 'new-select';
        newSelect.textContent = Array.from(select.children).find(option => option.disabled).textContent;
        selectWrapper.appendChild(newSelect);

        var selectList = document.createElement('div');
        selectList.className = 'new-select__list';
        selectWrapper.appendChild(selectList);

        for (var i = 1; i < selectOptionLength; i++) {
            var item = document.createElement('div');
            item.className = 'new-select__item';
            item.innerHTML = '<span>' + selectOption[i].textContent + '</span>';
            item.setAttribute('data-value', selectOption[i].value);
            selectList.appendChild(item);
        }

        var selectHead = selectWrapper.querySelector('.new-select');
        var selectItems = selectList.querySelectorAll('.new-select__item');
        selectList.style.display = 'none';

        selectHead.addEventListener('click', function() {
            if (!selectHead.classList.contains('on')) {
                selectHead.classList.add('on');
                selectList.style.display = 'block';

                selectItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        var chooseItem = item.getAttribute('data-value');
                        select.value = chooseItem;
                        select.setAttribute('selected', 'selected');
                        selectHead.textContent = item.querySelector('span').textContent;

                        selectList.style.display = 'none';
                        selectHead.classList.remove('on');
                    });
                });

            } else {
                selectHead.classList.remove('on');
                selectList.style.display = 'none';
            }
        });
    });
});