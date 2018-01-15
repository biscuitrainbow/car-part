@extends('layout') @section('content')

<evaluation-form inline-template :spares="{{$spares}}">
	<div class="ui four column grid">
		<div class="row">
			<div class="column four wide">
				<h3>เลื่อกชิ้นส่วน</h3>

				<form action="">
					<div class="ui form">
						<div v-for="spare in spares" class="inline field">
							<div class="ui two coulmn grid">
								<div class="row">
									<div class="column eight wide">
										<div class="ui checkbox">
											<input type="checkbox" :value="spare.id" @change="selectSpare(spare,$event.target.checked)" tabindex="0" class="hidden">
											<label><strong>@{{spare.name}}</strong></label>
											<div class="bottom aligned content">
												<p></p>
												<div class="header">
													@{{spare.price }} <strong>฿</strong>
												</div>
											</div>
										</div>

									</div>
									<div class="column eight wide">
										<img class="ui tiny left spaced image" src="/images/parts/brake.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="column twelve wide">
				<div class="ui fluid card ">
					<div class="content">
						<h3>ข้อมูลลูกค้า</h3>
						<div class="ui grid">
							<div class="five column row">
								<div class="column">
									<span class="ui horizontal label">ทะเบียน</span> {{$license_plate}}
								</div>
								<div class="column">
									<span class="ui horizontal label">ยี่ห้อ</span> {{$brand->name}}
								</div>
								<div class="column">
									<span class="ui horizontal label">รุ่น</span> {{$serie->name}}
								</div>
								<div class="column">
									<span class="ui horizontal label">สี</span> {{$color}}
								</div>
								<div class="column">
									<span class="ui horizontal label">ส่วนที่ซ่อม</span> {{$part->name}}
								</div>
							</div>
						</div>
					</div>
				</div>

				<h3>รายการ</h3>

				<table class="ui basic table">
					<thead>
						<tr>
							<th>ชื่อ</th>
							<th>ราคา</th>
							<th>จำนวน</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="selectedSpare in selectedSpares">
							<td><strong>@{{selectedSpare.name}}</strong></td>
							<td>
								@{{selectedSpare.price * selectedSpare.amount}}
							</td>
							<td>
								<button class="ui basic mini compact icon button" @click="increseAmount(selectedSpare)"><i class="plus icon"></i></button>
								<input type="text" v-model="selectedSpare.amount">
								<span style="padding:10px;">@{{selectedSpare.amount}}</span>
								<button class="ui basic mini compact icon button"  @click="decreseAmount(selectedSpare)"><i class="minus icon"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
				<h3>Total : @{{totalPrice}}</h3>
			</div>
		</div>
	</div>
</evaluation-form>


@endsection()