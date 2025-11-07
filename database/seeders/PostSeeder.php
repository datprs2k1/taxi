<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bài viết nổi bật
        Post::create([
            'title' => 'TUYỂN DỤNG KỸ THUẬT VIÊN BẢO DƯỠNG & CHĂM SÓC Ô TÔ – VUNGTAUCAR',
            'slug' => Str::slug('TUYỂN DỤNG KỸ THUẬT VIÊN BẢO DƯỠNG & CHĂM SÓC Ô TÔ – VUNGTAUCAR'),
            'content' => 'Nội dung tuyển dụng chi tiết...',
            'excerpt' => 'Tuyển dụng kỹ thuật viên với mức lương hấp dẫn, môi trường làm việc chuyên nghiệp',
            'image' => null,
            'type' => 'post',
            'featured' => true,
            'published_date' => now()->format('Y-m-d'),
        ]);

        // Các bài viết thường
        $regularPosts = [
            [
                'title' => 'Bảng giá xe Ô tô MG Bà Rịa Vũng Tàu giá lăn bánh, khuyến mãi 2021',
                'excerpt' => 'Bảng giá xe Ô tô MG Bà Rịa Vũng Tàu giá lăn bánh, khuyến mãi 2021 MG Bà Rịa – Vũng Tàu kính chào quý khách! Để g...',
                'published_date' => '2021-10-21',
            ],
            [
                'title' => 'Đại lý MG Bà Rịa Vũng Tàu - Showroom Xe MG chính hãng tại BRVT',
                'excerpt' => 'Đại lý MG Bà Rịa Vũng Tàu Kính Chào Quý Khách ! Đại lý MG Bà Rịa Vũng Tàu là đại lý kinh doanh xe MG u...',
                'published_date' => '2021-10-21',
            ],
            [
                'title' => 'Top ngân hàng cho vay mua ô tô với lãi suất tốt nhất Bà Rịa Vũng Tàu hiện nay',
                'excerpt' => 'Những ngân hàng cho vay mua ô tô với lãi suất tốt nhất hiện nay Nếu bạn đang phân vân không biết lựa chọn ngân hàng n...',
                'published_date' => '2021-10-14',
            ],
            [
                'title' => 'Kia Carnival 2021 ra mắt tại Việt Nam, giá từ 1,199 tỷ đồng',
                'excerpt' => 'Kia Carnival 2021 ra mắt tại Việt Nam, giá từ 1,199 tỷ đồng. So với Sedona trước đây, mức giá của Kia Carniv...',
                'published_date' => '2021-10-13',
            ],
        ];

        foreach ($regularPosts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'content' => 'Nội dung bài viết...',
                'excerpt' => $post['excerpt'],
                'image' => null,
                'type' => 'post',
                'featured' => false,
                'published_date' => $post['published_date'],
            ]);
        }

        // Bài viết cho cột giữa
        $listPosts = [
            ['title' => 'Top 10 ô tô bán chạy nhất tháng 2/2023', 'published_date' => '2023-03-14'],
            ['title' => 'Tin nóng 12/2022 - hàng trăm ôtô bị từ...', 'published_date' => '2022-12-23'],
            ['title' => 'Tai sao mua bảo hiểm thân vỏ xe nhưng vẫ...', 'published_date' => '2022-11-12'],
            ['title' => 'Top 10 xe bán chạy nhất tháng 9/2022', 'published_date' => '2022-07-22'],
            ['title' => 'Giá xe Honda HRV 2022 tại Bà Rịa Vũng...', 'published_date' => '2022-06-15'],
        ];

        foreach ($listPosts as $post) {
            Post::create([
                'title' => $post['title'],
                'content' => 'Nội dung bài viết...',
                'excerpt' => 'Nội dung tóm tắt...',
                'image' => null,
                'type' => 'post',
                'featured' => false,
                'published_date' => $post['published_date'],
            ]);
        }

        // Bài viết khuyến mãi
        $promotionPosts = [
            ['title' => 'Top 20+ quán cafe đẹp tại Tp Vũng Tàu, Bà Rịa Vũng Tàu view siêu chất'],
            ['title' => 'Danh sách các Văn phòng luật, công ty luật uy tín tại Vũng Tàu'],
            ['title' => 'Danh sách các Hồ bơi view biển đẹp nhất Vũng Tàu'],
            ['title' => 'Danh sách các Địa điểm chụp ảnh tuyệt đẹp ở Vũng Tàu miễn phí'],
            ['title' => 'Danh sách các địa chỉ homestay đẹp nhất ở Vũng Tàu'],
            ['title' => 'Danh sách các điểm thăm quan miễn phí không thể bỏ qua khi du lịch Vũng Tàu'],
            ['title' => 'Danh sách các điểm du lịch văn hóa tâm linh nổi tiếng nhất ở Vũng Tàu'],
            ['title' => 'Danh sách các Dịch vụ trang trí tiệc sinh nhật đẹp nhất Vũng Tàu'],
            ['title' => 'Danh sách các Homestay view biển đẹp nhất Bà Rịa Vũng Tàu'],
        ];

        foreach ($promotionPosts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'content' => 'Nội dung khuyến mãi...',
                'excerpt' => 'Nội dung tóm tắt...',
                'image' => null,
                'type' => 'promotion',
                'featured' => false,
                'published_date' => now()->subDays(rand(1, 30))->format('Y-m-d'),
            ]);
        }
    }
}
