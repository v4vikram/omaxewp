
<?php 
wp_footer();
?>

</main>
<!-- form -->
<div
class="form-section fixed top-[35%] lg:top-[90%] left-[50%]  transform lg:-translate-y-1/2 -translate-x-1/2 z-[9999] block">
<div class="w-full  p-3 btn-bg   
!rounded-lg shadow-md relative">
	<div class="bg-black p-2 text-white block w-[40px] text-center mb-[1rem] ml-auto lg:hidden" id="form-close">
		X</div>
	<form class="flex-col lg:flex lg:flex-row gap-4" id="contactForm">

		<!-- Name Field -->
		<div class="flex flex-col mb-3">
			<input type="text" id="name" name="name" placeholder="Your Name"
				class="px-4 py-2 rounded-md border">
		</div>

		<!-- Email Field -->
		<div class="flex flex-col mb-3">
			<input type="email" id="email" name="email" placeholder="Your Email"
				class="px-4 py-2 rounded-md border">
		</div>

		<!-- Phone Field -->
		<div class="flex flex-col mb-3">
			<input type="tel" id="phone" name="phone" placeholder="Your Number"
				class="px-4 py-2 rounded-md border">
		</div>

		<!-- Submit Button -->
		<button type="submit"
			class="px-4 py-2 font-semibold text-white bg-black rounded-md hover:bg blue-600 h-[43px]">
			Submit
		</button>
	</form>
</div>
</div>
<footer class="bg-black pt-[50px] md:pt-[100px]" id="contactSection">
	<div class="container">
		<div class="grid grid-cols-12">
			<div class="col-span-12 md:col-span-5 lg:col-span-4">
				<a href="<?=site_url()?>">
					<img src="<?=get_template_directory_uri()?>/img/logo.webp" alt="logo" class="w-[150px]">
				</a>
				<p class="text-white mt-[15px]">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquam quaerat itaque veritatis minima repudiandae nisi. Corporis deserunt tempore minima nihil officiis veniam qui quae accusantium, a amet impedit reprehenderit.
				</p>
			   
			</div>
			<div class="col-span-12 md:col-span-7 lg:col-span-8 mt-5 md:mt-0 md:pl-[100px] lg:pl-[300px]">
				<form class="flex-col flex gap-4" id="contactFormFooter">

					<!-- Name Field -->
					<div class="flex flex-col mb-3">
						<input type="text" id="name" name="name" placeholder="Your Name"
							class="py-2 border-b-2 bg-transparent text-white">
					</div>

					<!-- Email Field -->
					<div class="flex flex-col mb-3">
						<input type="email" id="email" name="email" placeholder="Your Email"
							class="py-2 border-b-2 bg-transparent text-white">
					</div>

					<!-- Phone Field -->
					<div class="flex flex-col mb-3">
						<input type="tel" id="phone" name="phone" placeholder="Your Number"
							class="py-2 border-b-2 bg-transparent text-white">
					</div>

					<!-- Submit Button -->
					<button type="submit"
						class="px-4 py-2 font-semibold text-black bg-white h-[43px]">
						Submit
					</button>
				</form>
			</div>
		</div>
		<p class="text-center text-white py-[25px] md:py-[40px]">
			© Omaxe 2024. All rights reserved.
		</p>
	</div>
</footer>


</body>

</html>