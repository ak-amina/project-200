@extends('layouts.master')
@section('title')
    Department
@endsection

@section('content')
    <!-- Start Bannere Area -->
    <section class="banner_area programmes_bg margin-40">
        <div class="container">
            <div class="banner_content p-250 text-left">
                <p><a href="#">home<i class="fas fa-angle-right"></i></a>department<i class="fas fa-angle-right"></i>{{$table->name}}</a></p>
            </div>
        </div>
    </section>
    <!-- End Bannere Area -->

    <!-- Start Courses_top Area -->
    <div class="course_top_area margin-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="c_top_left">
                        <img style="height: 290px;" src="{{asset('public/uploads/department/'.$table->image)}}" alt="" />
                        <p>{{$table->name}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="c_top_right">
                        <ul>
                            <li>Duration : <span>{{$table->duration}}</span></li>
                            <li>Total Credits : <span>{{$table->total_credit}}</span></li>
                            <li>Availability : <span>Day/Evening</span></li>
                            <li>Entry Time : <span>January/ May/ September</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Courses_top Area -->

  <!-- Start Faculty Area -->
		<div class="cse_faculty_members">
			<div class="container">
				<div class="row">
					<div class="col-md-12 bg-info text-center pt-2">
						<div class="faculty_heading">
							<h2>Faculties</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="md-form mt-4">
							<input id="search" class="form-control" data-url="{{action('Department\DepartmentController@facultySearch',['id' => $id])}}" name="search" type="search" placeholder="Search" aria-label="Search">
						</div>
					</div>
				</div>

				<div class="row mt-5 mb-5" id="faculty_all">


				</div>
			</div>
		</div>
		</div>
		<!-- End Faculty Area -->
	
		<!-- Start Semester Area -->
		<div class="semester">
			<div class="container">
				<div class="row">
					<div class="col-md-12 bg-info text-center pt-2">
						<div class="faculty_heading">
							<h2>Course Details</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<div class="semester_menu">
							<div class="btn-group btn-group-vertical mt-5" id="semesterClick">
								
							</div>
						</div>
					</div>
					<div class="col-9" id="one">
						<div class="s_cou_area">
							<div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-4">
									<div class="md-form mt-4">
										
									</div>
								</div>
							</div>
						</div>
						<div class="semester_details">
							<table class="table">
								<thead class="thead-dark">
									<tr>
									  <th scope="col">S/N</th>
									  <th class="text-left" scope="col">Course Title</th>
									  <th class="text-left" scope="col">code</th>
									  <th class="text-left" scope="col">credit</th>
									</tr>
								</thead>
								<tbody id="course_show">

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  Start Semester Area -->
    <!--  Start Course details Area-->
@endsection

@section('script')
	<script type="text/javascript">
		// faculty filter
		$(function () {
			$(function () {
				contents("{{action('Department\DepartmentController@allFaculty', ['id' => $id])}}");
				$('#search').keyup(function (e) {
					e.preventDefault();
					var search = $(this).val();
					var url = $(this).data('url')+'?search='+search;

					if (search.length>0){
						contents(url);
					}
					else {
						contents("{{action('Department\DepartmentController@allFaculty',['id' => $id])}}");
					}

				});
			});

			function contents(url) {
				$.get(url, function(result){
					var show_data = '';
					$.each(result, function( i, row ) {
						show_data += '<div class="col-md-3">\n' +
								'\t\t\t\t\t\t<div class="single_faculty">\n' +
								'\t\t\t\t\t\t\t<img value="'+row.id+'" src="../public/uploads/faculty/'+row.image+'" alt="" />\n' +
								'\t\t\t\t\t\t\t<ul class="info_faculty">\n' +
								'\t\t\t\t\t\t\t\t<li value="'+row.id+'">'+row.name+'</li>\n' +
								'\t\t\t\t\t\t\t\t<li value="'+row.id+'">'+row.designation+'</li>\n' +
								'\t\t\t\t\t\t\t</ul>\n' +
								'\t\t\t\t\t\t\t<ul>\n' +
								'\t\t\t\t\t\t\t\t<li><a href=""><i class="fab fa-facebook-f"></i>\n' +
								'\t\t\t\t\t\t\t\t\t</a></li>\n' +
								'\t\t\t\t\t\t\t\t<li><a href=""><i class="fab fa-linkedin-in"></i>\n' +
								'\t\t\t\t\t\t\t\t\t</a></li>\n' +
								'\t\t\t\t\t\t\t\t<li><a href=""><i class="fab fa-twitter"></i></a></li>\n' +
								'\t\t\t\t\t\t\t</ul>\n' +
								'\t\t\t\t\t\t</div>\n' +
								'\t\t\t\t\t</div>'
					});

					$('#faculty_all').html(show_data);
				});
			}
		});
</script>
@endsection