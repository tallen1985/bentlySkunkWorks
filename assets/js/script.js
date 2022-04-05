let itemDB = [];

class Item {
  constructor(title, url, sku, mainImage, price) {
    this.sku = sku;
    this.title = title;
    this.mainImage = mainImage;
    this.url = url;
    this.price = price;
  }
}

const getDB = async () => {
  let data = "<?php echo $data; ?>";
  let data_parsed = JSON.parse(data);
  itemDB = [];
  try {
    const response = await fetch(
      `https://openapi.etsy.com/v2/shops/BentlyskunkworksShop/listings/active?method=GET&api_key=${etsyAPI}&fields=title,price,url&limit=100&includes=MainImage`
    );

    const itemArray = data_parsed.results;
    for (item of itemArray) {
      const { title, url, sku, MainImage, price } = item;
      itemDB.push(new Item(title, url, sku, MainImage.url_170x135, price));
    }
    populateFeatured(itemDB);
    return itemDB;
  } catch (error) {
    console.log(error);
  }
};

// .then((data) => {
//   return data;
// })
// .then((parsedItems) => {
//   populateFeatured(parsedItems);
//   items = parsedItems;
// });

const populateFeatured = (items) => {
  let featuredRemaining = 3;
  if (items) {
    const carouselDiv = document.getElementById("carouselDiv");

    items.forEach((item) => {
      if (featuredRemaining) {
        const rand = Math.random();
        if (rand > 0.5) {
          const newEl = document.createElement("div");
          newEl.classList.add("carousel-item");

          if (carouselDiv.childElementCount == 0) {
            newEl.classList.add("active");
          }

          newEl.innerHTML = `
            <img src=${item.mainImage} class="img-fluid"></img>
              <h2>${item.title}</h2>`;

          carouselDiv.appendChild(newEl);
          featuredRemaining--;
        }
      }
    });
  }
};
getDB();
populateFeatured(itemDB);
