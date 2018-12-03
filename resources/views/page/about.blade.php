@extends('master')

@section('head')
<style type="text/css">
	.img_about{
		width: 50%;
		padding-left: 15px;
		padding-bottom: 15px;
		float: right;
	}
	@media ( max-width: 768px )
	{
		.img_about{
			width: 100%;
			padding: 0;
		}
	}
</style>
@endsection
@section('body')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card-body">
				<img src="{{ url('/node_modules/logo/logo.png') }}" class="img_about">
				<p>GENERAL
					Saphir Resort&Spa, a seafront coastal hotel in Mediterranean, is a pretty elite and comfortable premises, which was founded at historical Karaburun bay shore, in 2008.The premises founded on a wide area ensures a peaceful holiday filed to our guests  with its 4 panoramic buildings with guest lift, various activity facilities and verdant garden. 
					ROOMS
					Most of the Saphir Resort&Spa rooms, which are specially designed, are sea, garden and pool view. Balcony, card access system, mini-bar, electronic safe-deposit box, LCD TV with satellite broadcasting, telephone -in room and bath-, bath, WC, hair dryer, carpeted flooring, central air conditioner system in all rooms prepared for our guest's comfort.    
					RESTAURANT&BAR
					Indoor and outdoor sea-garden view main restaurant overlooks to Karaburun bay, open buffet for kids,  Ottoman and Italian A la Carte restaurants, Snack restaurant, Turkish pancake part and with many bars, serves the most magnificent food and drink at many times within the day.
					BEACH & POOL
					Private seafront beach having International "Blue Flag Beach" and "Green Key" awards is quite wide and sandy and located in one of the most beautiful bays of Mediterranean.  
					Has 1500 m2 open buffet swimming pool and shadier pool special to children. Also has an aquapark pool with 3 water slides. The indoor pool is near-by Spa.
					ACTIVITIES & ENTERTAINMENT
					There are several activities at our hotel e.g. tennis, basketball, table tennis, beach volley, aerobic, dart,  water polo, water aerobics, other pool activities, various tournament and competitions, fitness center, game arcade.   Water sports, diving course, internet cafe, video game arcade and billiard are for a fee.   Special to the children; our youngest guests may spend their time at Mini-club, in the garden or inside the building (depending on the season), with our special entertainment team. May have fun at playpen and in our garden and have possibility to have their dinner with their friends at open buffet special for them. Children's fun also continue through the evening at open air theatre and kids disco...
					Evening entertainments; shows, cabarets, special and different performances, competitions are performed at amphitheatre and also concept nights and parties are being organised.  
					Fun goes on through the night at open air disco
					MEETING
					Various organisations can be performed at our hotel with 2 meeting rooms, with a capacity of 40 attendants, and 1 meeting hall, with a capacity of 350 attendants; all equipped with all kind of technical equipments.
					LOCATION
					Saphir Hotel is in historical Karaburun bay shore in Okurcalar town of Alanya district in Antalya, in Mediterranean.
					Other Services
					Mini shopping center, hair dresser salon, photograph saloon, physician, rent a car, laundry, room service and babysitting services are for a fee. WLAN is valid at most places of the hotel.
					*Pets are not allowed in our premises.
					*Wristbands are available for our guests.
					*Valid Credit Cards:  Visa, Master, American Express

				</p>
			
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')

@endsection