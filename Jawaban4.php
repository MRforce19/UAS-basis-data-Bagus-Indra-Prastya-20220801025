$tagName = 'POCO X3 NFC'; // Ambil dari input form
$tagSlug = Str::slug($tagName); // Ambil dari input form

$tag = new Tag;
$tag->name = $tagName;
$tag->slug = $tagSlug;
$tag->save();
