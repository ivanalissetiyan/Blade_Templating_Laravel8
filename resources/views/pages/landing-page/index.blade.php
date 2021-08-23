@extends('layouts.app')

@section('title', 'home')

@section('content')
      <!-- Hero -->
  </section><section class="h-full w-full border-box bg-white">
		<div class="content-2-2" style="font-family: 'Poppins', sans-serif">
			<div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
				<!-- Title Text -->
				<div class="flex flex-col text-center w-full mb-12">
					<h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
						3 Keys Benefit
					</h1>
					<h2
						class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
						You can easily manage your business with a powerful tools
					</h2>
				</div>

				<!-- 3-Column -->
				<div class="flex lg:flex-row flex-col -m-4">
					<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
						<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
							<div class="items-center text-center">
								<div class="inline-flex items-center justify-center rounded-full mb-6">
									<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
										alt="" />
								</div>
							</div>
							<div class="flex-grow">
								<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
									Easy to Operate
								</h4>
								<p class="leading-relaxed text-base text-center tracking-wide text-gray">
									This can easily help you to <br /> grow up your business fast
								</p>
							</div>
						</div>
					</div>
					<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
						<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
							<div class="items-center text-center">
								<div class="inline-flex items-center justify-center rounded-full mb-6">
									<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
										alt="" />
								</div>
							</div>
							<div class="flex-grow">
								<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
									Real-Time Analytic
								</h4>
								<p class="leading-relaxed text-base text-center tracking-wide text-gray">
									With real-time analytics, you <br /> can check data in real time
								</p>
							</div>
						</div>
					</div>
					<div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
						<div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
							<div class="items-center text-center">
								<div class="inline-flex items-center justify-center rounded-full mb-6">
									<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
										alt="" />
								</div>
							</div>
							<div class="flex-grow">
								<h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
									Very Full Secured
								</h4>
								<p class="leading-relaxed text-base text-center tracking-wide text-gray">
									With real-time analytics, we <br /> will guarantee your data
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="lg:px-24 md:px-16 sm:px-8 px-4 pb-20 pt-12 mx-auto">
				<div class="flex lg:flex-row flex-col -m-4">
					<div class="p-4 w-full">
						<div
							class="card-header h-full flex lg:flex-row flex-col p-7 rounded-xl lg:space-x-3.5 md:space-x-3.5 space-x-0">
							<div class="text-center mx-auto">
								<img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
									alt="" />
							</div>
							<div
								class="flex-grow my-auto lg:text-left lg:w-3/4 w-full lg:text-left text-center lg:my-auto md:my-auto py-6">
								<h4 class="text-2xl font-semibold mb-2.5">
									Fast Business Management in 30 minutes
								</h4>
								<p class="text-base font-light tracking-wide w-full text-gray">
									Our tools for business analysis helps an organization understand <br
										class="lg:block hidden" /> market or business development.
								</p>
							</div>
							<a class="inline-block items-center my-auto text-center">
								<button
									class="btn-fill font-bold text-white text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full rounded-xl mb-4 md:mb-5 lg:mb-5 focus:outline-none hover:shadow-lg">
									Buy Now
								</button>
								<button
									class="btn-outline font-normal text-black text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent">
									Demo Version
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@push('after-style')
       		<style>
			@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

			.content-2-2 .btn-outline {
				border: 1px solid #979797;
				color: #979797;
			}

			.content-2-2 .btn-outline:hover {
				border: 1px solid #27c499;
				color: #27c499;
			}

			.content-2-2 .btn-fill {
				background-color: #27c499;
				border: 1px solid #27c499;
			}

			.content-2-2 .card-header {
				background-color: #eef6f4;
				border: 1px solid #27c499;
			}

			.content-2-2 .text-medium-black {
				color: #121212;
			}

			.content-2-2 .text-gray {
				color: #565656;
			}
		</style>
@endpush