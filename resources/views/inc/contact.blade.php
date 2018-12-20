
<div class="container contact-form">
		<div class="contact-image">
			<img src="{{ asset('img\icon_contact.png') }}" alt="rocket_contact"/>
		</div>
		<form >
			<h3>Drop Us a Message</h3>
			 @if (Session::has('flash_message'))
            <div class="alert alert-succes">{{ Session::get('flash_message') }}</div>
            @endif
		   <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<form action="{{ route('contact.store') }}" method="POST">
                {{ csrf_field()}}
                <input type="text" name="name" value="" placeholder="Name" class="form-control">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('firstname')}}</small>
                @endif
					</div>
					<div class="form-group">
						<input type="email" name="email" value="" placeholder="Your email" class="form-control">
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
                @endif 
					</div>
					<div class="form-group">
						<input type="phone" name="Phone" value="" placeholder="Phonenumber" class="form-control">
                @if ($errors->has('phone'))
                    <small class="form-text invalid-feedback">{{ $errors->first('phone')}}</small>
                @endif 
					</div>
					<div class="form-group">
						<input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<textarea name="message" rows="10" cols="30" placeholder="Your question" class="form-control" style="width: 100%; height: 150px;"></textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                @endif    
					</div>
				</div>
			</div>
		</form>
</div>