const header = document.querySelector('.site-header');
const toggle = document.querySelector('.mobile-toggle');
if (toggle && header) {
  toggle.addEventListener('click', () => {
    const open = header.classList.toggle('nav-open');
    toggle.setAttribute('aria-expanded', String(open));
  });
}

document.querySelectorAll('.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    if (header) header.classList.remove('nav-open');
    if (toggle) toggle.setAttribute('aria-expanded', 'false');
  });
});

document.querySelectorAll('.faq-question').forEach((button) => {
  button.addEventListener('click', () => {
    const item = button.closest('.faq-item');
    const isOpen = item.classList.toggle('open');
    button.setAttribute('aria-expanded', String(isOpen));
  });
});

const yearNode = document.querySelector('[data-year]');
if (yearNode) yearNode.textContent = new Date().getFullYear();
