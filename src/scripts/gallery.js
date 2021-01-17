(() => {
  var block = document.getElementById('gallery-box');
  var picturesRequest = new XMLHttpRequest();

    
  picturesRequest.onreadystatechange = function() {
    if (picturesRequest.readyState == 4 && picturesRequest.status == 200) {
      var pictures = JSON.parse(picturesRequest.responseText);
      renderHtml(pictures);
    }
  };
  picturesRequest.open('GET', './src/json/gallery/gallery.json', true);
  picturesRequest.send();
   
  function renderHtml(data) {
    var htmlString = "";
   
  
    for(i = 0; i < data.length; i++) {
      htmlString += 
      `
      <div class="col-md-4">
        <div class="gallery__item">
          <a class="gallery__link" href="${data[i].href}"><img class="gallery__main-img" src="${data[i].intro}" alt="${data[i].alt}" title="${data[i].title}"></a>
          <h2 class="gallery__name">${data[i].name}</h2>
        </div>
      </div>
      
    `
    }
    block.insertAdjacentHTML('beforeend', htmlString);
  }
})();