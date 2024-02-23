

    <div class="w-full block mt-8 bg-white">
        <div class="flex flex-wrap sm:flex-no-wrap justify-between">
            <div class="w-full sm:w-1/2 mr-2 mb-6">
                <!--เศรษฐ์ เกิดแสง 062-5952829-->
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            ชื่อ : 
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold">{{ $student->user->name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            อีเมล :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->user->email }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            คลาสเรียน :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->class->class_name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            รหัสนักเรียน :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->roll_number }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            เบอร์โทรศัพท์ :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->phone }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            เพศ :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->gender }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            วันเดือนปีเกิด :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->dateofbirth }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            ที่อยู่ชั่วคราว :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->current_address }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            ที่อยู่ถาวร :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->permanent_address }}</span>
                    </div>
                </div>
                <!--เศรษฐ์ เกิดแสง 062-5952829-->
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            ชื่อผู้ปกครอง :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->user->name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            อีเมลผู้ปกครอง :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->user->email }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                           เบอร์โทรศัพท์ผู้ปกครอง :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->phone }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            ที่อยู่ผู้ปกครอง :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->current_address }}</span>
                    </div>
                </div>
    
    
            </div>   
            
            

            <div class="w-full sm:w-1/2 mr-2 mb-6">
                <div class="flex items-center bg-gray-600">
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">รหัสวิชา</div>
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">ชื่อวิชา</div>
                    <div class="w-1/3 text-right text-white py-2 px-4 font-semibold">อาจารย์ผู้สอน</div>
                </div>
                @foreach ($student->class->subjects as $subject)
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
                    </div>
                @endforeach

                
            </div>

            

        </div>

        <div class="w-full px-0 md:px-6 py-4">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">ตารางเรียน</h2>
            </div>
            <div class="flex items-center bg-gray-600">
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">วันที่</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">คลาสเรียน</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">อาจารย์ผู้สอน</div>
                <div class="w-1/4 text-right text-white py-2 px-4 font-semibold">ตารางเวลา</div>
            </div>
            @foreach ($student->attendances as $attendance)
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->attendence_date }}</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->class->class_name }}</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->teacher->user->name }}</div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                        @if($attendance->attendence_status)
                            <span class="text-xs text-white bg-green-500 px-2 py-1 rounded-custom">P</span>
                        @else
                            <span class="text-xs text-white bg-red-500 px-2 py-1 rounded-custom">A</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--เศรษฐ์ เกิดแสง 062-5952829-->