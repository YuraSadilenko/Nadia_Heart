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
      <div class="gallery__item" onclick="openPopup()">
        <a href="${data[i].href}"><img class="gallery__main-img" src="${data[i].intro}" alt="${data[i].alt}" title="${data[i].title}"></a>
        <h2>${data[i].name}</h2>
      </div>

      
    `
    }
    block.insertAdjacentHTML('beforeend', htmlString);
  }
})();