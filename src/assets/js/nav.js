class NavComponent {
    constructor() {
      this.menuVisible = false;
      this.iconMenu = document.getElementById('menu');
      this.itemsDropdown = document.querySelector('.items-dropdown');
  
      if (this.iconMenu) {
        this.iconMenu.addEventListener('click', () => this.changeIcon());
      }
    }
  
    changeIcon() {
      this.changeVisibility();
      if (this.menuVisible) {
        this.iconMenu.classList.add('is-active');
        this.showMenu();
      } else {
        this.iconMenu.classList.remove('is-active');
        this.hideMenu();
      }
    }
  
    changeVisibility() {
      this.menuVisible = !this.menuVisible;
    }
  
    showMenu() {
      if (this.itemsDropdown) {
        this.itemsDropdown.style.height = '300px';
        this.itemsDropdown.style.padding = '15px';
      }
    }
  
    hideMenu() {
      if (this.itemsDropdown) {
        this.itemsDropdown.style.height = '0';
        this.itemsDropdown.style.padding = '0';
      }
    }
  }
  
  // Initialize the NavComponent when the document is ready
  document.addEventListener('DOMContentLoaded', () => new NavComponent());
  