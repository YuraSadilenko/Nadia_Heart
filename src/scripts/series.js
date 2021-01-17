(() => {
  var block = document.getElementById('series-box');
  var picturesRequest = new XMLHttpRequest();

    
  picturesRequest.onreadystatechange = function() {
    if (picturesRequest.readyState == 4 && picturesRequest.status == 200) {
      var pictures = JSON.parse(picturesRequest.responseText);
      renderHtml(pictures);
    }
  };
  picturesRequest.open('GET', './src/json/series/city_resident.json', true);
  picturesRequest.send();
   
  function renderHtml(data) {
    var htmlString = "";
   
  
    for(i = 0; i < data.length; i++) {
      htmlString += 
      `
      <div class="col-md-4">
        <div class="series__item">
          <a class="series__link" href="${data[i].href}"><img class="series__main-img" src="${data[i].intro}" alt="${data[i].alt}" title="${data[i].title}"></a>
          <h2 class="series__name">${data[i].name}</h2>
        </div>
      </div>
      
    `
    }
    block.insertAdjacentHTML('beforeend', htmlString);
  }
})();