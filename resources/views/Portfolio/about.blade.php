<!-- section-of-about -->

<section id="about">
	<div class="container mx-auto py-20 px-3 md:px-0">
		<div class="text-center front-bold ">
			<h6 class="text-blue-700 font-semibold">About me</h6>
			<h1 class="uppercase text-4xl text-gray-900 font-semibold">welcome to my website</h1>
			<p class="text-gray-500 text-justify  py-12  ">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
				into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>					
		<!-- Progress Part -->
		<div class="grid grid-cols-12 gap-4 justify-center ">
			@php 
				$pgColor = [10=>'red',20=>'red',30=>'amber',40=>'yellow',50=>'lime',60=>'green',70=>'cyan',80=>'sky',90=>'blue',100=>'indigo'];
			@endphp
			@forelse($about as $progress)
			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1 text-{{$progress->score<=10?$pgColor[10]: ($progress->score<=20?$pgColor[20]: ($progress->score<=30?$pgColor[30]:($progress->score<=40?$pgColor[40]: ($progress->score<=50?$pgColor[50]: ($progress->score<=60?$pgColor[60]: ($progress->score<=70?$pgColor[70]: ($progress->score<=80?$pgColor[80]: ($progress->score<=90?$pgColor[90]:($progress->score<=100?$pgColor[100]: '')))))))))}}-500">{{$progress->title}}</h6>
				<!-- progress bar 1 -->
				
				<div class="bg-gray-600 rounded-full  text-center text-xs ">
					<div class="bg-{{$progress->score<=10?$pgColor[10]: ($progress->score<=20?$pgColor[20]: ($progress->score<=30?$pgColor[30]:($progress->score<=40?$pgColor[40]: ($progress->score<=50?$pgColor[50]: ($progress->score<=60?$pgColor[60]: ($progress->score<=70?$pgColor[70]: ($progress->score<=80?$pgColor[80]: ($progress->score<=90?$pgColor[90]:($progress->score<=100?$pgColor[100]: '')))))))))}}-500
						h-4 rounded-full w-[{{$progress->score}}%] text-white">
						<small>{{$progress->score}}%</small>
					</div>
				</div>
			</div>
			@empty
			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">WEB DESIGN</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-green-700 h-4 rounded-full w-10/12 text-white"><small>80%</small></div>
				</div>
			</div>

			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">PHP DEVELOPMENT</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-yellow-700 h-4 rounded-full w-9/12 text-white"><small>75%</small></div>
				</div>
			</div>

			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">PHOTOGRAPHY</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-blue-700 h-4 rounded-full w-8/12 text-white"><small>70%</small></div>
				</div>
			</div>

			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">BRANDING</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-yellow-900 h-4 rounded-full w-11/12 text-white"><small>95%</small></div>
				</div>
			</div>

			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">MARKETING</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-blue-800 h-4 rounded-full w-6/12 text-white"><small>65%</small></div>
				</div>
			</div>

			<div class="md:col-span-4 sm:col-span-6 col-span-full mb-3">
				<h6 class="mb-1">SEO</h6>
				<!-- progress bar 1 -->
				<div class="bg-gray-600 rounded-full  text-center text-xs">
					<div class="bg-pink-700 h-4 rounded-full w-7/12 text-white"><small>65%</small></div>
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>