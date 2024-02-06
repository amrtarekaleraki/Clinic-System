@extends('layouts.app')
@section('title')
    {{__('messages.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">


                <div class="col-12 mb-2">
                       <h1 style="font-weight: 700px; font-size:23px;">Dashboard</h1>
                </div>

                {{-- boxes start --}}

                <div class="col-12 mb-4">
                    <div class="row">

                        <div class="col-xxl-4 col-xl-4 col-sm-6 widget" >
                            <a href="{{ route('doctors.index') }}" class=" text-decoration-none">
                            <div class="  p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3"  style=" height:75px; border-radius:8px; box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.08);background: #FFFFFF" >
                                <div class=" d-flex align-items-center justify-content-center" style="background: #845EC2; width:42px; height:42px; border-radius:8px;">
                                    {{-- <i class="fas fa-user-md display-4 card-icon text-white"></i> --}}
                                    <img src="{{ asset('web/media/avatars/doctor.png') }}" alt="" width="24" height="24">
                                </div>
                                <div class="text-end text-white">
                                    <h2 class="fs-1-xxl fw-bolder " style="color: #1B1B1B">{{$data['totalDoctorCount']}}</h2>
                                    <h3 class="mb-0 fs-4 fw-light" style="color: #ACACAC">{{__('messages.admin_dashboard.total_doctor')}}</h3>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-xxl-4 col-xl-4  col-sm-6 widget">
                            <a href="{{ route('patients.index') }}" class="text-decoration-none">
                                <div
                                    class="  p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3"  style=" height:75px; border-radius:8px; box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.08); background: #FFFFFF">
                                    <div
                                    class=" d-flex align-items-center justify-content-center" style="background: #FE7ABC; width:42px; height:42px; border-radius:8px;">
                                        {{-- <i class="fas fa-hospital-user display-4 card-icon text-white hospital-user-dark-mode"></i> --}}
                                        <img src="{{ asset('web/media/avatars/patients.png') }}" alt="" width="24" height="24">
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder" style="color: #1B1B1B">{{$data['totalPatientCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light" style="color: #ACACAC">{{__('messages.admin_dashboard.total_patients')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xxl-4 col-xl-4  col-sm-6 widget">
                            <a href="{{ route('appointments.index') }}" class="text-decoration-none">
                                <div
                                    class="  p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3"  style=" height:75px; border-radius:8px; box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.08); background: #FFFFFF">
                                    <div class=" d-flex align-items-center justify-content-center" style="background: #00D2FC; width:42px; height:42px; border-radius:8px;">
                                        {{-- <i class="fas fa-user-md display-4 card-icon text-white"></i> --}}
                                        <img src="{{ asset('web/media/avatars/calender.png') }}" alt="" width="24" height="24">
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder " style="color: #1B1B1B">{{$data['todayAppointmentCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light" style="color: #ACACAC">{{__('messages.admin_dashboard.today_appointments')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                            <a href="{{ route('patients.index') }}" class="text-decoration-none">
                                <div class="bg-info rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                    <div class="bg-blue-300 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user-injured display-4 card-icon text-white"></i>
                                    </div>
                                    <div class="text-end text-white">
                                        <h2 class="fs-1-xxl fw-bolder text-white">{{$data['totalRegisteredPatientCount']}}</h2>
                                        <h3 class="mb-0 fs-4 fw-light">{{__('messages.admin_dashboard.today_registered_patients')}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div> --}}



                    </div>
                </div>

                {{-- boxes end --}}


                {{-- test start --}}


                <div class="col-12 mb-4">
                    <div class="row">



                        {{-- <div class="col-12 col-lg-4 col-xl-4 d-flex" >
                            <div class="card radius-10 w-100" style="box-shadow: 10px 10px 5px #aaaaaa;">
                                <div class="card-header border-bottom bg-transparent">
                                 <div class="d-flex align-items-center">
                                     <div>
                                         <h6 class="mb-0">Latest Doctors Added</h6>
                                     </div>
                                     <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                     </div>
                                 </div>
                             </div>
                              <ul class="list-group list-group-flush">

                                 @forelse($data['totaldoctors'] as $doctor)

                                         <li class="list-group-item bg-transparent">
                                         <div class="d-flex align-items-center">
                                             <img src="{{ $doctor->user->profile_image }}" alt="user avatar" class="rounded-circle" width="55" height="55">
                                         <div class="ms-3">
                                             <h6 class="mb-0">Name :<small class="ms-4">{{ $doctor->user->first_name }} {{ $doctor->user->last_name }}</small></h6>
                                             <p class="mb-0 small-font"> {{ $doctor->user->email }}</p>
                                         </div>
                                         <div class="ms-auto star">
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-light-4'></i>
                                             <i class='bx bxs-star text-light-4'></i>
                                         </div>
                                         </div>
                                         </li>

                                 @empty
                                     <tr class="text-center">
                                         <td colspan="5"
                                             class="text-center text-muted fw-bold">{{ __('messages.common.no_data_available') }}</td>
                                     </tr>
                                 @endforelse

                               </ul>
                            </div>
                         </div> --}}

                         {{-- doctors latest added --}}


                         <div class="col-12 col-lg-8 col-xl-8 mb-2">
                            {{Form::hidden('book_calender', \App\Models\Appointment::BOOKED,['id' => 'bookCalenderConst'])}}
                            {{Form::hidden('check_in_calender', \App\Models\Appointment::CHECK_IN,['id' => 'checkInCalenderConst'])}}
                            {{Form::hidden('checkOut_calender', \App\Models\Appointment::CHECK_OUT,['id' => 'checkOutCalenderConst'])}}
                            {{Form::hidden('cancel_calender', \App\Models\Appointment::CANCELLED,['id' => 'cancelCalenderConst'])}}
                            <div class="d-flex flex-column flex-lg-row ">
                                <div class="flex-lg-row-fluid">
                                    <div class="card" style="box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.08);">
                                        <div class="card-header">
                                            <h2 class="card-title">{{__('messages.appointment.calendar')}}</h2>
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-primary badge-circle me-1 slot-color-dot"></span>
                                                    <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[1]))}}</span>
                                                    <span class="badge bg-success badge-circle me-1 slot-color-dot"></span>
                                                    <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[2]))}}</span>
                                                    <span class="badge bg-warning badge-circle me-1 slot-color-dot"></span>
                                                    <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[3]))}}</span>
                                                    <span class="badge bg-danger badge-circle me-1 slot-color-dot"></span>
                                                    <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[4]))}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0" >
                                            <div id="adminAppointmentCalendar" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




						{{-- <div class="col-12 col-lg-6 col-xl-4 d-flex">
						  <div class="card radius-10 overflow-hidden w-100">
							 <div class="card-body">
							   <p>Total Transactions</p>
							   <h4 class="mb-0">${{ $data['totaltransactions']->sum('amount') }}</h4>

							   <hr>
							   <div class="mt-5">
							   <div class="">
                                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
								</div>
							  </div>
							 </div>
						  </div>
						</div> --}}


                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card  overflow-hidden w-100" style="border-radius: 8px;">
                               <div class="card-body calendar_body">

                                <div class="wrapper_test">
                                    <header class="header_calendar">
                                      <p class="current-date"></p>
                                      <div class="icons">
                                        <span id="prev">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                          </svg>
                                        </span>

                                        <span id="next">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                          </svg>
                                        </span>
                                       </div>
                                    </header>

                                    <div class="calendar_test">
                                      <ul class="weeks">
                                        <li>Sun</li>
                                        <li>Mon</li>
                                        <li>Tue</li>
                                        <li>Wed</li>
                                        <li>Thu</li>
                                        <li>Fri</li>
                                        <li>Sat</li>
                                      </ul>
                                      <ul class="days"></ul>
                                    </div>
                                  </div>


                               </div>
                            </div>
                          </div>



					</div>
                </div>



                {{-- test end --}}






                                {{-- chart test --}}


                                {{-- <div class="col-12 mb-5">
                                    {{Form::hidden('book_calender', \App\Models\Appointment::BOOKED,['id' => 'bookCalenderConst'])}}
                                    {{Form::hidden('check_in_calender', \App\Models\Appointment::CHECK_IN,['id' => 'checkInCalenderConst'])}}
                                    {{Form::hidden('checkOut_calender', \App\Models\Appointment::CHECK_OUT,['id' => 'checkOutCalenderConst'])}}
                                    {{Form::hidden('cancel_calender', \App\Models\Appointment::CANCELLED,['id' => 'cancelCalenderConst'])}}
                                    <div class="d-flex flex-column flex-lg-row">
                                        <div class="flex-lg-row-fluid">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2 class="card-title">{{__('messages.appointment.calendar')}}</h2>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-primary badge-circle me-1 slot-color-dot"></span>
                                                            <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[1]))}}</span>
                                                            <span class="badge bg-success badge-circle me-1 slot-color-dot"></span>
                                                            <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[2]))}}</span>
                                                            <span class="badge bg-warning badge-circle me-1 slot-color-dot"></span>
                                                            <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[3]))}}</span>
                                                            <span class="badge bg-danger badge-circle me-1 slot-color-dot"></span>
                                                            <span class="me-4">{{__('messages.common.'.strtolower(\App\Models\Appointment::STATUS[4]))}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div id="adminAppointmentCalendar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                    {{-- <div class="col-12 mb-5">


                        <div class="col-12 col-lg-4 col-xl-4 d-flex" >
                            <div class="card radius-10 w-100" style="box-shadow: 1px 1px 1px 1px #aaaaaa;">
                                <div class="card-header border-bottom bg-transparent">
                                 <div class="d-flex align-items-center">
                                     <div>
                                         <h6 class="mb-0">Latest Doctors Added</h6>
                                     </div>
                                     <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                     </div>
                                 </div>
                             </div>
                              <ul class="list-group list-group-flush">

                                 @forelse($data['totaldoctors'] as $doctor)

                                         <li class="list-group-item bg-transparent">
                                         <div class="d-flex align-items-center">
                                             <img src="{{ $doctor->user->profile_image }}" alt="user avatar" class="rounded-circle" width="55" height="55">
                                         <div class="ms-3">
                                             <h6 class="mb-0">Name :<small class="ms-4">{{ $doctor->user->first_name }} {{ $doctor->user->last_name }}</small></h6>
                                             <p class="mb-0 small-font"> {{ $doctor->user->email }}</p>
                                         </div>
                                         <div class="ms-auto star">
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-warning'></i>
                                             <i class='bx bxs-star text-light-4'></i>
                                             <i class='bx bxs-star text-light-4'></i>
                                         </div>
                                         </div>
                                         </li>

                                 @empty
                                     <tr class="text-center">
                                         <td colspan="5"
                                             class="text-center text-muted fw-bold">{{ __('messages.common.no_data_available') }}</td>
                                     </tr>
                                 @endforelse

                               </ul>
                            </div>
                         </div>

                     </div> --}}






                                {{-- chart test --}}




                                {{-- test2 start --}}


                                <div class="col-12 mb-4">
                                    <div class="row">

                                        <div class="col-12 col-lg-4 col-xl-4 d-flex">
                                          <div class="card radius-10 overflow-hidden w-100" style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.08);">
                                             {{-- <div class="card-body">
                                               <div class="mt-5">
                                               <div class="">
                                                <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                                                </div>
                                              </div>
                                             </div> --}}
                                             <div class="card-body">
                                                <p>Total Transactions</p>
                                                <h4 class="mb-0">${{ $data['totaltransactions']->sum('amount') }}</h4>

                                                <hr>
                                                <div class="mt-5">
                                                <div class="">
                                                 <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                                                 </div>
                                               </div>
                                              </div>

                                          </div>
                                        </div>






                                            <div class="col-12 col-lg-4 col-xl-4 d-flex" >
                                                <div class="card radius-10 w-100" style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.08);">
                                                    <div class="card-header border-bottom bg-transparent">
                                                     <div class="d-flex align-items-center">
                                                         <div>
                                                             <h6 class="mb-0">Latest Doctors Added</h6>
                                                         </div>
                                                         <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                                         </div>
                                                     </div>
                                                 </div>
                                                  <ul class="list-group list-group-flush">

                                                     @forelse($data['totaldoctors'] as $doctor)

                                                             <li class="list-group-item bg-transparent">
                                                             <div class="d-flex align-items-center">
                                                                 <img src="{{ $doctor->user->profile_image }}" alt="user avatar" class="rounded-circle" width="55" height="55">
                                                             <div class="ms-3">
                                                                 <h6 class="mb-0">Name :<small class="ms-4">{{ $doctor->user->first_name }} {{ $doctor->user->last_name }}</small></h6>
                                                                 <p class="mb-0 small-font"> {{ $doctor->user->email }}</p>
                                                             </div>
                                                             <div class="ms-auto star">
                                                                 <i class='bx bxs-star text-warning'></i>
                                                                 <i class='bx bxs-star text-warning'></i>
                                                                 <i class='bx bxs-star text-warning'></i>
                                                                 <i class='bx bxs-star text-light-4'></i>
                                                                 <i class='bx bxs-star text-light-4'></i>
                                                             </div>
                                                             </div>
                                                             </li>

                                                     @empty
                                                         <tr class="text-center">
                                                             <td colspan="5"
                                                                 class="text-center text-muted fw-bold">{{ __('messages.common.no_data_available') }}</td>
                                                         </tr>
                                                     @endforelse

                                                   </ul>
                                                </div>
                                             </div>






                                         {{-- doctor --}}


                                        <div class="col-12 col-lg-4 col-xl-4 d-flex">


                                            <div class="card radius-10 w-100" style="box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.08); margin-top:-400px; height:380px;">
                                                <div class="card-header border-bottom bg-transparent">
                                                 <div class="d-flex align-items-center">
                                                     <div>
                                                         <h6 class="mb-0">Latest Patients Added</h6>
                                                     </div>
                                                     <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                                                     </div>
                                                 </div>
                                             </div>
                                              <ul class="list-group list-group-flush">

                                                 @forelse($data['totalpatients'] as $patient)

                                                         <li class="list-group-item bg-transparent">
                                                         <div class="d-flex align-items-center">
                                                             <img src="{{ $patient->profile }}" alt="user avatar" class="rounded-circle" width="55" height="55">
                                                         <div class="ms-3">
                                                             <h6 class="mb-0">Name :<small class="ms-4">{{ $patient->user->first_name }} {{ $patient->user->last_name }}</small></h6>
                                                             <p class="mb-0 small-font"> {{ $patient->user->email }}</p>
                                                         </div>
                                                         <div class="ms-auto star">
                                                             <i class='bx bxs-star text-warning'></i>
                                                             <i class='bx bxs-star text-warning'></i>
                                                             <i class='bx bxs-star text-warning'></i>
                                                             <i class='bx bxs-star text-light-4'></i>
                                                             <i class='bx bxs-star text-light-4'></i>
                                                         </div>
                                                         </div>
                                                         </li>

                                                 @empty
                                                     <tr class="text-center">
                                                         <td colspan="5"
                                                             class="text-center text-muted fw-bold">{{ __('messages.common.no_data_available') }}</td>
                                                     </tr>
                                                 @endforelse

                                               </ul>
                                            </div>


                                            {{-- <div class="card radius-10 overflow-hidden w-100" style="box-shadow: 10px 10px 5px #aaaaaa;">
                                               <div class="card-body">
                                                 <div class="mt-5">
                                                 <div class="">
                                                  <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                                                  </div>
                                                </div>
                                               </div>
                                            </div> --}}
                                          </div>




                                    </div>
                                </div>



                                {{-- test2 end --}}


                                {{-- start calendar --}}

                                {{-- <div class="col-12 col-lg-12 col-xl-12 d-flex mb-5" style="height: 320px">
                                    <div class="card radius-10 overflow-hidden w-100">
                                       <div class="card-body">
                                         <div class="mt-5">

                                           <div class="parent_calendar">
                                            <div class="card_calendar">
                                                <div>
                                                  <div id="month_calendar"></div>
                                                </div>
                                                <div class="content_calendar">
                                                  <div id="day"></div>
                                                  <div id="date"></div>
                                                  <div id="year"></div>
                                                </div>
                                              </div>
                                           </div>

                                        </div>
                                       </div>
                                    </div>
                                </div> --}}


                                {{-- end calendar --}}




                                <div class="col-12 mb-4">
                                    <div class="row">

                                        <div class="col-12 col-lg-4 col-xl-4">
                                                <div class="test-img">
                                                         <a href="{{ route('visits.index') }}">
                                                            <img src="{{ asset('assets/image/4.PNG') }}" alt="" style="border-radius: 20px; height:414px; width:450px;">
                                                         </a>
                                                </div>
                                        </div>


                                    </div>
                                </div>















                {{-- <div class="col-xxl-12">
                        <div class="d-flex border-0 pt-5">
                            <h3 class="align-items-start flex-column">
                                <span class="fw-bolder fs-3 mb-1">{{__('messages.admin_dashboard.recent_patients_registration')}}</span>
                            </h3>
                            <div class="ms-auto">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active text-primary btn-active-light-primary fw-bolder px-4 active dayData"
                                           data-bs-toggle="tab" href=""
                                           id="dayData">{{__('messages.admin_dashboard.day')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1 weekData"
                                           data-bs-toggle="tab" href=""
                                           id="weekData">{{__('messages.admin_dashboard.week')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1 monthData"
                                           data-bs-toggle="tab" href=""
                                           id="monthData">{{__('messages.admin_dashboard.month')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="month">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.name')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.patient_id')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.doctor_dashboard.total_appointments')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.patient.registered_on')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="monthlyReport" class="text-gray-600 fw-bold">
                                            @forelse($data['patients'] as $patient)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="image image-circle image-mini me-3">
                                                                <img src="{{ $patient->profile}}" alt="user" class="">
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <a href="{{ route('patients.show',$patient->id) }}"
                                                                   class="text-primary-800 mb-1 fs-6 text-decoration-none
">{{$patient->user->fullname}}</a>
                                                                <span
                                                                        class="text-muted fw-bold d-block">{{$patient->user->email}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start">
                                                        <span class="badge bg-light-success">{{$patient->patient_unique_id}}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light-danger">{{$patient->appointments_count}}</span>
                                                    </td>
                                                    <td class="text-center text-muted fw-bold">
                                                        <span class="badge bg-light-info">
                                                        {{ \Carbon\Carbon::parse($patient->user->created_at)->isoFormat('DD MMM YYYY hh:mm A')}}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="5"
                                                        class="text-center text-muted fw-bold">{{ __('messages.common.no_data_available') }}</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="week">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.name')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.patient_id')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.doctor_dashboard.total_appointments')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.patient.registered_on')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="weeklyReport" class="text-gray-600 fw-bold">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-25px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.name')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7">{{__('messages.admin_dashboard.patient_id')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.doctor_dashboard.total_appointments')}}</th>
                                                <th class="min-w-150px text-muted mt-1 fw-bold fs-7 text-center">{{__('messages.patient.registered_on')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="dailyReport" class="text-gray-600 fw-bold">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                </div> --}}
            </div>
        </div>
    </div>
    @include('dashboard.templates.templates')
    @include('appointments.models.admin-appointment-model')
@endsection
