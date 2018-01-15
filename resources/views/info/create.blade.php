@extends('layout') @section('content')
<form class="ui form" action="{{route('evaluation.create')}}" method="GET">
	<h4 class="ui dividing header">ข้อมูลลูกค้า</h4>
	<div class="field">
		<div class="two fields">
			<div class="field">
				<label>ทะเบียนรถ</label>
				<input type="text" name="license_plate" placeholder="License Plate">
			</div>
			<div class="field">
				<label>สี</label>
				<input type="text" name="color" placeholder="Color">
			</div>
		</div>
	</div>
	<div class="field">
		<div class="three fields">
			<div class="field">
				<label>ยี่ห้อ</label>
				<select class="ui fluid search dropdown" name="brand">
				@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach()
        		</select>
			</div>
			<div class="field">
				<label>รุ่น</label>
				<select class="ui fluid search dropdown" name="serie">
					@foreach($series as $serie)
						<option value="{{$serie->id}}">{{$serie->name}}</option>
					@endforeach()
        		</select>
			</div>
			<div class="field">
				<label>ส่วนที่ซ่อม</label>
				<select class="ui fluid search dropdown" name="part">
					@foreach($parts as $part)
						<option value="{{$part->id}}">{{$part->name}}</option>
					@endforeach()
       			 </select>
			</div>
		</div>
	</div>
	<button type="submit" class="ui button" tabindex="0">ต่อไป</button>
</form>
@endsection()