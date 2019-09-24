<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour360;
use Auth;
class Tour360Controller extends Controller
{
    public function show(){
        $tour360 = Tour360::all();
        return view('admin.tour.index',['tour360'=>$tour360]);
    }
    public function getDanhSach(){
    	$tour360 = Tour360::all();
    	return view('admin.tour.danhsach',['tour360'=>$tour360]);
    }

    public function Them(){
    	return view('admin.tour.them');
    }

    public function XuLyThemTT(Request $request){
		$tour360 = new Tour360;
		$this->SaveData($request,$tour360);
    	return redirect('admin/tour/them')->with('message','Thêm project mới thành công!');
	}
	public function getSua($id){
		$tour = Tour360::find($id);
		return view('admin.tour.sua',['tour' => $tour]);
	}
	public function XuLySuaTT(Request $request,$id){
		$tour = Tour360::find($id);
		$this->SaveData($request,$tour);
		return redirect('admin/tour/sua/'.$id)->with('message','Sửa project thành công!');
	}
	public function SaveData(Request $request,$tour360){
    	$this->validate($request,
    		[
    			'name_project' => 'required|string',
                'name_investor' => 'required',
                'link' => 'required',
                'status' =>'required',
                'description' =>'required',
                'img_thumb' => 'required'
            ]);
    	$tour360->users_id = Auth::getUser()->id;
        $tour360->name_project = $request->input('name_project');
        $tour360->name_investor = $request->input('name_investor');
        $tour360->link = $request->input('link');
        $tour360->status = $request->input('status');
        $tour360->description = $request->input('description');

    	if($request->hasFile('img_thumb')) // Kiểm tra xem người dùng có upload hình hay không
    	{
    		$img_file = $request->file('img_thumb'); // Nhận file hình ảnh người dùng upload lên server

    		$img_file_extension = $img_file->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

    		if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg' && $img_file_extension != 'PNG' && $img_file_extension != 'JPG')
    		{
    			return redirect('admin/tour/them')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
    		}

    		$img_file_name = $img_file->getClientOriginalName(); // Lấy tên của file hình ảnh

    		$random_file_name = str_random(4).'_'.$img_file_name; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
    		while(file_exists('upload/tour/'.$random_file_name)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
    		{
    			$random_file_name = str_random(4).'_'.$img_file_name;
    		}
    		echo $random_file_name;

    		$img_file->move('upload/tour',$random_file_name); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
    		$tour360->img_thumb = $random_file_name;
    	}
    	else
    		$tour360->img_thumb = ''; // Nếu người dùng không upload hình thì sẽ gán đường dẫn là rỗng
    		$tour360->save();
	}
	public function Xoa($id){
		Tour360::find($id)->delete();
		return redirect('admin/tour/danhsach')->with('message',' Xóa project thành công');
	}
	public function uploadFileZip(){
		
	}
}
