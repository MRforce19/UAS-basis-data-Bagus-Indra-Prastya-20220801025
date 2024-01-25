$categoryName = 'POCO X3 NFC'; // Ambil dari input form
$categorySlug = Str::slug($categoryName); // Ambil dari input form
$categoryActive = true; // Ambil dari input form

$category = new Category;
$category->name = $categoryName;
$category->slug = $categorySlug;
$category->active = $categoryActive;
$category->save();
