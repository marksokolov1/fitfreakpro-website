const header = document.querySelector('.site-header');
const toggle = document.querySelector('.mobile-toggle');
const nav = document.querySelector('.main-nav');

const closeNavigation = () => {
  if (header) header.classList.remove('nav-open');
  if (toggle) {
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open navigation');
  }
};

if (toggle && header) {
  if (nav) {
    nav.id = nav.id || 'primary-navigation';
    toggle.setAttribute('aria-controls', nav.id);
  }

  toggle.addEventListener('click', () => {
    const open = header.classList.toggle('nav-open');
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
  });
}

document.querySelectorAll('.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    closeNavigation();
  });
});

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') closeNavigation();
});

document.querySelectorAll('.faq-question').forEach((button, index) => {
  const item = button.closest('.faq-item');
  const answer = item ? item.querySelector('.faq-answer') : null;
  if (answer) {
    answer.id = answer.id || `faq-answer-${index + 1}`;
    button.setAttribute('aria-controls', answer.id);
  }

  button.addEventListener('click', () => {
    if (!item) return;
    const isOpen = item.classList.toggle('open');
    button.setAttribute('aria-expanded', String(isOpen));
  });
});

const yearNode = document.querySelector('[data-year]');
if (yearNode) yearNode.textContent = new Date().getFullYear();
