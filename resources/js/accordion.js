document.addEventListener('DOMContentLoaded', () => {
  let tabs = document.querySelectorAll('.tabs__toggle'),
      contents = document.querySelectorAll('.tabs__content');

  console.log(tabs);
  console.log(contents);

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      contents.forEach(content => content.classList.remove('is_active'));
      tabs.forEach(tab => tab.classList.remove('is_active'));

      contents[index].classList.add('is_active');
      tabs[index].classList.add('is_active');
    });
  });
});
