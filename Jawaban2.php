$categoryName = 'Smartphone'; // Ambil dari input form
$category = Category::firstOrCreate(['name' => $categoryName]);

$productName = 'POCO X3 NFC'; // Ambil dari input form
$productPrice = 2500000; // Ambil dari input form
$productImage = 'path/to/image.jpg'; // Ambil dari input form
$productSlug = Str::slug($productName); // Ambil dari input form
$productActive = true; // Ambil dari input form

$product = new Product;
$product->category_id = $category->id;
$product->name = $productName;
$product->price = $productPrice;
$product->image = $productImage;
$product->slug = $productSlug;
$product->active = $productActive;
$product->save();
