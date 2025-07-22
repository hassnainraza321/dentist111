<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
	@foreach($routes as $value)
		@if(!empty($value->getName()) && !in_array($value->getName(), ['sanctum.csrf-cookie', 'ignition.healthCheck', 'ignition.executeSolution', 'ignition.updateConfig', 'sitemap.xml', 'sitemap', 'search', 'emergency.dentist.county', 'emergency.dentist.cities', 'blog.detail', 'dental.clinic.county', 'dental.clinic.cities']))
			<url>
			    <loc>{{ route($value->getName()) }}</loc>
			</url>
		@endif
	@endforeach
	@if(!$posts->isEmpty())
		@foreach($posts as $post)
			<url>
			    <loc>{{ route('blog.detail', $post->slug) }}</loc>
			</url>
		@endforeach
	@endif
	@if(!$counties->isEmpty())
		@foreach($counties as $county)
			<url>
			    <loc>{{ route('emergency.dentist.county', $county->slug) }}</loc>
			</url>
		@endforeach
	@endif
	@if(!$cities->isEmpty())
		@foreach($cities as $city)
			<url>
			    <loc>{{ route('emergency.dentist.county', $city->slug) }}</loc>
			</url>
		@endforeach
	@endif
	@if(!$towns->isEmpty())
		@foreach($towns as $town)
			<url>
			    <loc>{{ route('emergency.dentist.county', $town->slug) }}</loc>
			</url>
		@endforeach
	@endif
	@if(!$cities->isEmpty())
		@foreach($cities as $city)
			@php
				$towns = DB::table('towns')->where('city_id', $city->id)->where('is_active', 1)->orderBy('slug', 'asc')->get();
			@endphp
			@if(!$towns->isEmpty())
				@foreach($towns as $town)
					<url>
					    <loc>{{ route('emergency.dentist.cities', [$city->slug, $town->slug]) }}</loc>
					</url>
				@endforeach
			@endif
		@endforeach
	@endif
</urlset>