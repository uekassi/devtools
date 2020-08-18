<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="simple-line-icons/css/simple-line-icons.css">
	<title>DevTools | Tools on Development</title>

	<style type="text/css">
		.jumbotron {
			background-color: transparent;
		}
		#adobe .jumbotron {
			box-shadow: 4px 4px 20px rgba(0,0,0,0.5);
		}
	</style>
	<?php
		if(isset($_POST['like'])) {
	?>
		<style type="text/css">
			.topElements > div > form > button {
				color: red;
			} 
		</style>
	<?php
	}
	?>
</head>
<body>
	<section class="topElements">
		<div><form class="" action="home.php" method="post">
			<button type="submit" name="like" class="btn"> 
				<span>
					<?php
						if(isset($_POST['like'])) {
						$monfichier = fopen('like.txt', 'r+');

						$nbre_like = fgets($monfichier);

						echo "$nbre_like";

						$nbre_like++;

						fseek($monfichier, 0);

						fputs($monfichier, $nbre_like);

						fclose($monfichier);
					}
					?>
				</span> 
				<span class="fa fa-heart fa-lg"></span>
			</button>
		</form></div>
		<div> <button class="btn"> <span class="icon icon-bubbles fa-lg"></span> </button> </div>
		<div><button class="btn"> <span class="icon icon-share fa-lg"></span> </button></div>
	</section>

	<section class="page firstPage">
		<center>
			<div class="pageTitle">
				<div class="jumbotron">
					<h1>Welcome to DevTools</h1>
					<h2>A website were you can find almost everything about development !</h2>

					<p>
						We are excited to have you <span class="fa fa-smile-o"></span> !
						This a little briefing about the website contain <br>
						<nav>
							<ul>
								<li><a href="#htmlTags">Html Tags</a></li>
								<li><a href="#adobe">Adobe Tools</a></li>
							</ul>
						</nav>
					</p>
				</div>				
			</div>
		</center>
	</section>

	<section class="page scndPage" id="htmlTags">
		<center>
			<div class="pageTitle">
				<div class="jumbotron">
					<h1>HTML5 Tags</h1>
					<h2>Let's learn almost all rare html tags <span class="icon icon-emotsmile"></span></h2>
				</div>				
			</div>

			<div class="pageContent">
				<div>
					<h2>&lt;address&gt;&lt;/address&gt;</h2>
					Generally use in <span class="bolder-txt">footer</span> tag. It regroups informations about the document author.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;area&gt;&lt;/area&gt;</h2>
					Define a zone of zones for image card.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>alt</li>
						<li>coords</li>
						<li>shape</li>
						<li>href</li>
						<li>target</li>
						<li>rel</li>
						<li>media</li>
						<li>hreflang</li>
						<li>type</li>
					</ul>
				</div>

				<div>
					<h2>&lt;base&gt;&lt;/base&gt;</h2>
					Use to define the main URL.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>href</li>
						<li>target</li>
					</ul>
				</div>

				<div>
					<h2>&lt;bdo&gt;&lt;/bdo&gt;</h2>
					use for text direction. The "dir" attribute as an other semantic value.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;bdi&gt;&lt;/bdi&gt;</h2>
					use for text direction. The "dir" attribute as an other semantic value.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>
				
				<div>
					<h2>&lt;canvas&gt;&lt;/canvas&gt;</h2>
					To create a graphic with the possibility to animate it with js.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>width</li>
						<li>height</li>
					</ul>
				</div>

				<div>
					<h2>&lt;cite&gt;&lt;/cite&gt;</h2>
					Use for titles of a document or en event.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;code&gt;&lt;/code&gt;</h2>
					Use to declare an informatic code. We can use this tag inside the <b>pre</b> tag for a preformated text. It's recommended to use a class with the name of the informatic language.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;command&gt;&lt;/command&gt;</h2>
					Use as a <b>button</b>, a <b>checkbox</b>, or a <b>radiobutton</b>. This tag can only be visible inside the <b>menu</b> tag. The title attribute as a differernt meaning here.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>type</li>
						<li>label</li>
						<li>icon</li>
						<li>disabled</li>
						<li>checked</li>
						<li>radiogroup</li>
					</ul>
				</div>

				<div>
					<h2>&lt;datalist&gt;&lt;/datalist&gt;</h2>
					Use to set an unfold list.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;del&gt;&lt;/del&gt;</h2>
					Use to indicate that a part of the text is deleted but conserved to save the trace. We can add some style to it with css.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>cite</li>
						<li>datetime</li>
					</ul>
				</div>

				<div>
					<h2>&lt;details&gt;&lt;/details&gt;</h2>
					Use to bring details on Widget, can be use to show or hide complementaries informations. Can be a container of the <b>summary</b> tag.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Spefic attributes</h3>
					<ul>
						<li>open</li>
					</ul>
				</div>

				<div>
					<h2>&lt;dfn&gt;&lt;/dfn&gt;</h2>
					Represents the term of a definition, we use it in a paragraph or a list definition. Can be use with the <b>abbr</b> tag.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;dl&gt;&lt;/dl&gt;</h2>
					use for a list definition. This tag can't be use to create tags.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;dt&gt;&lt;/dt&gt;</h2>
					To declare a definition. It's use with the <b>dl</b> tag.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
				</div>

				<div>
					<h2>&lt;embed&gt;&lt;/embed&gt;</h2>
					Use for external content and interactif or for plug-in.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>src</li>
						<li>type</li>
						<li>width</li>
						<li>height</li>
					</ul>
				</div>

				<div>
					<h2>&lt;form&gt;&lt;/form&gt;</h2>
					Use for forms.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>accept-charset</li>
						<li>action</li>
						<li>autocomplete</li>
						<li>enctype</li>
						<li>method</li>
						<li>name</li>
						<li>novalidate</li>
						<li>target</li>
					</ul>
				</div>

				<div>
					<h2>&lt;html&gt;&lt;/html&gt;</h2>
					Use to declare an html document.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>manifest</li>
					</ul>
				</div>

				<div>
					<h2>&lt;iframe&gt;&lt;/iframe&gt;</h2>
					Use to create a sub window.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>src</li>
						<li>srcdoc</li>
						<li>name</li>
						<li>sandbox</li>
						<li>seamless</li>
						<li>width</li>
						<li>height</li>
					</ul>
				</div>

				<div>
					<h2>&lt;input&gt;&lt;/input&gt;</h2>
					Use to set text fields.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>accept</li>
						<li>alt</li>
						<li>autocomplete</li>
						<li>autofocus</li>
						<li>checked</li>
						<li>dirname</li>
						<li>disables</li>
						<li>form</li>
						<li>formaction</li>
						<li>formenctype</li>
						<li>formmethod</li>
						<li>formnovalidate</li>
						<li>formtarget</li>
						<li>height</li>
						<li>list</li>
						<li>max</li>
						<li>maxlength</li>
						<li>min</li>
						<li>multiple</li>
						<li>name</li>
						<li>pattern</li>
						<li>placeholder</li>
						<li>readonly</li>
						<li>required</li>
						<li>size</li>
						<li>src</li>
						<li>step</li>
						<li>type</li>
						<li>value</li>
						<li>width</li>
					</ul>
				</div>

				<div>
					<h2>&lt;ins&gt;&lt;/ins&gt;</h2>
					Use to insert new text  on revised document. We can use the tag with the <b>del</b> tag that is use to indicate that a portion of text is no more valable.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>cite</li>
						<li>datetimec</li>
					</ul>
				</div>

				<div>
					<h2>&lt;keygen&gt;&lt;/keygen&gt;</h2>
					Represents a key generator control stock in "keystore local".
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>autofocus</li>
						<li>challenge</li>
						<li>disabled</li>
						<li>form</li>
						<li>keytype</li>
						<li>name</li>
					</ul>
				</div>

				<div>
					<h2>&lt;kbd&gt;&lt;/kbd&gt;</h2>
					When the text is use to define a keyboard action.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
						<li>height</li>
					</ul>
				</div>

				<div>
					<h2>&lt;map&gt;&lt;/map&gt;</h2>
					Use to create an image card with reactivs zones. The <b>name</b> attribute is required.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>name</li>
					</ul>
				</div>

				<div>
					<h2>&lt;menu&gt;&lt;/menu&gt;</h2>
					Use to set a list of command.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>type</li>
						<li>label</li>
					</ul>
				</div>

				<div>
					<h2>&lt;meter&gt;&lt;/meter&gt;</h2>
					Use for mesures.
					<h3>Attributes</h3>
					<ul>
						<li>accesskey</li>
						<li>class</li>
						<li>contenteditable</li>
						<li>contextmenu</li>
						<li>dir</li>
						<li>draggable</li>
						<li>dropzone</li>
						<li>hidden</li>
						<li>id</li>
						<li>lang</li>
						<li>spellcheck</li>
						<li>style</li>
						<li>tabindex</li>
						<li>title</li>
						<li>translate</li>
					</ul>
					<h3>Specific attributes</h3>
					<ul>
						<li>value</li>
						<li>min</li>
						<li>name</li>
						<li>sandbox</li>
						<li>seamless</li>
						<li>width</li>
						<li>height</li>
					</ul>
				</div>
			</div>
		</center>
	</section>

	<section class="page thirdPage" id="adobe">
		<div class="jumbotron">
			<p>
				<h1>Adobe Tools</h1>
				Has large software on bureautics
			</p>
		</div>

		<div class="jumbotron">
			<p>
				<h2>Adobe Photoshop</h2>
				<h3>Presentation : Adobe Photoshop</h3>
				Adobe photoshop is a software use to retouch photos that can be use in Window and on MacOS. It offers to users the possibility to create, to ameliorate or to modify images, photos or illustrations.<br>
				With photoshop you can change the background, simulate a real painting or create an alternative view of the universe. It is the most use software for photo editing, image manipulation and retouch of many type of image files or video files. Photoshop tools help us to modify both individuals images and group images. There is many versions of the software : <b>Photoshop CC</b>, <b>Photoshop Elements</b> and <b>Photoshop Lightroom</b>. Adobe photoshop is disponible from <b>23.99 euros</b> per mont with a Creative Cloud subscription.
			</p>
		</div>

		<div class="jumbotron">
			<p>
				<h3>Who uses Photoshop</h3>
				Adobe Photoshop is a tool essentially for designers, web developers, graphists, photographs and creation professionnals. It is largely use for image edition, retouch, creation of images composition, websites models and effects add.Numeric or numerise images can be modified for an online use or on paper. Websites models can be design on photoshop and their conception can be finalize by web developers by coding.
			</p>
		</div>
	</section>
</body>
</html>