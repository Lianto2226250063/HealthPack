<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    .gradient-custom {
    background: rgb(122, 179, 76);
    background: -webkit-linear-gradient(to right, #286316, #49a02f, #7ab34c, #8efa79);
    background: linear-gradient(to right, #286316, #49a02f, #7ab34c, #8efa79)
    }
</style>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="name" value="__('name')">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" />
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="email" value="__('email')">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" />
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" />
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                </form>
                </div>

                <div>
                <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Log in</a>
                </p>
                </div>

            </div>
            </div>
        </div>
      </div>
    </div>
  </section>
