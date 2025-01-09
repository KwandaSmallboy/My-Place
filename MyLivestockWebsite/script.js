function filterLivestock(type) {
    const items = document.querySelectorAll('.livestock-item');
    items.forEach(item => {
      if (type === 'all' || item.dataset.type === type) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }