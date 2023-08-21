@forelse ($students as $student)
                                <tr>
                                    <td scope="row" class="">{{ $student->name }}</td>
                                    <td>
                                        <p class="mb-0 d-block d-md-none"> {{Str::limit($student->email , 15 , '...')}} </p>
                                        <p class="mb-0 d-none d-md-block"> {{$student->email }} </p>
                                        <p class="mb-0 text-black-50">{{ $student->phone}}</p>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        <p> {{ Str::limit($student->address, 50 , '...') }} </p>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="{{ route('student.relatedPayment' , $student->id ) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-credit-card-multiple h5"></i>
                                        </a>
                                    </td>
                                    <td class=" align-middle text-center">
                                        <a href="{{ route('student.relatedClass' , $student->id ) }}" class="btn table-btn-sm btn-primary">
                                            <i class="mdi mdi-book-open-page-variant h5"></i>
                                        </a>
                                    </td>
                                    <td class="text-end align-middle text-nowrap">
                                        <div class="d-none d-md-block control-btns">
                                            <a href="{{ route('student.edit', $student->id ) }}" class="btn table-btn-sm btn-primary">
                                                <i class="mdi mdi-pencil h5"></i>
                                            </a>

                                            <form action="{{ route('student.destroy' , $student->id ) }}" class=" d-inline-block" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"  class="btn table-btn-sm btn-danger del-btn alertbox">
                                                    <i class="mdi mdi-delete h5 text-white"></i>
                                                </button>
                                            </form>


                                        </div>


                                        <div class="btn-group control-btn dropup d-block d-md-none ">
                                            <button type="button"
                                                class="btn table-btn-sm btn-outline-dark border border-0 dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical h4"></i>
                                            </button>

                                            <ul class="dropdown-menu mb-1">
                                                <div class="d-flex ">
                                                    <li>
                                                        <a href="{{ route('student.edit' , $student->id ) }}"
                                                            class="btn table-btn-sm btn-outline-primary border border-0">
                                                            <i class="mdi mdi-pencil h5"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('student.destroy' , $student->id ) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn table-btn-sm btn-outline-danger border border-0">
                                                                <i class="mdi mdi-delete h5 "></i>
                                                            </button>
                                                        </form>

                                                    </li>

                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Data is Empty</td>
                                @endforelse