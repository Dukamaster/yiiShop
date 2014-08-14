<ul id="sideManu" class="nav nav-tabs nav-stacked">
	<?php foreach ($this->getData() as $category):?>
		<li class="subMenu open"><a><?php echo CHtml::encode($category->name); ?></a>
			<ul>
			<?php if ($childs = Category::model()->child($category->category_id)->findAll()):?>
				<?php foreach ($childs as $child):?>
					<!-- <li><a href="products.html"><i class="icon-chevron-right"></i><?php echo CHtml::encode($child->name); ?></a></li> -->
					<li>
					<?php 
 						echo CHtml::link('<i class="icon-chevron-right"></i>'.$child->name, 
 							Yii::app()->createUrl('product/search',array('cat'=>$child->category_id))); 
 					?>
 					</li>
				<?php endforeach; ?>
			<?php endif; ?>
			</ul>
		</li>
	<?php endforeach; ?>
</ul>

