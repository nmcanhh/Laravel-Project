	@extends('admin.layout.index')
	@section('content')
	<!-- Page Content -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">


			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-1 text-gray-800">Thêm chủ đề</h1>
                <br>

				<!-- Content Row -->
				<div class="row">

					<!-- Border Left Utilities -->

					<div class="col-lg-6">

						<div class="card mb-4 py-3 border-left-primary">
							<div class="card-body">
								@if(session('loi'))
                            <div class="alert alert-danger">
                                {{session('loi')}}
                            </div>
                        @endif

                        @if($error ?? '')
                            <div class="alert alert-danger">
                                @foreach($error->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
								<div>
									<form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label><b>Tên:</b></label>
                                            <input type="text" class="form-control" placeholder="Nhập tên" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label><b>Mô tả:</b></label>
                                            <input type="text" class="form-control" placeholder="Nhập mô tả" name="description">
                                        </div>
										<div class="text-center">
											<button type="submit" id="mloading" class="btn btn-success"><i class="fas fa-check"></i></button>
											<button type="reset" class="btn btn-danger"><i class="fas fa-redo-alt"></i></button>
										</div>
										<form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->



			</div>

			@endsection
