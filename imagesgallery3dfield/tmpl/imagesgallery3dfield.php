<?php defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$doc = JFactory::getDocument();
$doc->addStylesheet('plugins/fields/imagesgallery3dfield/media/css/imagesgallery3dfield.css');


// for usecase if this customField is rendered in Blogview - generate uniqueID
$uniqid = uniqid();

// get the folder name in images directory
$value = $field->value;

// read the .jpg from the selected directory

jimport('joomla.filesystem.folder');
$filter = '.\.jpg$';
$images = JFolder::files('images/' . $value);


?>

<?php if ($value != '-1') : ?>

<div class="gallerycontainer">
	<div id="gallerycarousel">

		<?php foreach ($images as $image) : ?>
		<figure>
		<a href="<?php echo 'images/' . $value . '/' . $image; ?>"><?php echo JHtml::_('image', 'images/' . $value . '/' . $image, JText::_("PLG_FIELDS_SIMPLEBSSLIDER_IMAGE_ALT_PREFIX") . " " . $image, array('class' => 'd-block img-fluid', 'title' => $image) , false); ?></a>
		</figure>
		<?php endforeach; ?>

	</div>
</div>

<?php endif; ?>
