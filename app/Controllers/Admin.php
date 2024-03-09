<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class Admin extends BaseController
{
    protected $request;
    protected $categoryModel;
    protected $tagModel;
    protected $postModel;
    protected $postCategoryModel;
    protected $postTagModel;
    protected $userModel;
    protected $fileUploadedModel;
    protected $chatbotModel;

    public function __construct()
    {
        $this->request = \Config\Services::request();
        // loading helper dari myth/Auth
        helper('auth');

        $this->categoryModel = new \App\Models\CategoryModel();
        $this->tagModel = new \App\Models\TagModel();
        $this->postModel = new \App\Models\PostModel();
        $this->postCategoryModel = new \App\Models\PostCategoryModel();
        $this->postTagModel = new \App\Models\PostTagModel();
        $this->userModel = new \App\Models\UserModel();
        $this->fileUploadedModel = new \App\Models\FileUploadedModel();
        $this->chatbotModel = new \App\Models\ChatbotModel();
    }

    public function index()
    {
        //
    }
    public function posts($post_id = null)
    {
        $data = [
            'post' => $this->postModel->find($post_id),
            'post_category' => $this->postCategoryModel->where('post_id', $post_id)->findColumn('category_id')[0] ?? [],
            'post_tag' => $this->postTagModel->where('post_id', $post_id)->findColumn('tag_id') ?? [],
            'menu' => 'admin',
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
            'latest_posts' => $this->postModel->findAll(3),
        ];
        return view('create_post', $data);
    }
    public function category()
    {
        $data = [
            'menu' => 'admin',
            'categories' => $this->categoryModel->findAll(),
            'latest_posts' => $this->postModel->findAll(3),

        ];
        return view('category', $data);
    }
    public function tag()
    {
        $data = [
            'menu' => 'admin',
            'tags' => $this->tagModel->findAll(),
            'latest_posts' => $this->postModel->findAll(3),

        ];
        return view('tag', $data);
    }
    public function user()
    {
        $data = [
            'menu' => 'admin',
            'tags' => $this->tagModel->findAll(),
            'latest_posts' => $this->postModel->findAll(3),
            'users' => $this->userModel->findAll(),
        ];
        return view('user', $data);
    }
    public function create_post()
    {
        $input_data = [
            'post_id' => $this->request->getPost('postId'),
            'user_id' => $this->request->getPost('userId'),
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'created_at' => $this->request->getPost('created_at'),
            'updated_at' => $this->request->getPost('updated_at'),
            'author' => $this->request->getPost('author'),
            'link' => $this->request->getPost('postLink'),
            'banner' => $this->request->getPost('banner')
        ];
        $post_id = $this->postModel->insert($input_data);

        $post_category_data = [
            'post_id' => $post_id,
            'category_id' => $this->request->getPost('category')
        ];
        $this->postCategoryModel->where('post_id', $post_id)->delete();
        $this->postCategoryModel->insert($post_category_data);

        $post_tag_data = [];
        foreach ($this->request->getPost('tag') ?? [] as $key => $tag) {
            array_push($post_tag_data, [
                'post_id' => $post_id,
                'tag_id' => $tag,
            ]);
        };
        // dd($post_tag_data);
        $this->postTagModel->where('post_id', $post_id)->delete();
        if ($post_tag_data != []) {
            $this->postTagModel->insertBatch($post_tag_data);
        };

        return redirect()->back();
    }

    public function update_post($post_id)
    {
        $input_data = [
            'user_id' => $this->request->getPost('userId'),
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'created_at' => $this->request->getPost('created_at'),
            'updated_at' => $this->request->getPost('updated_at'),
            'author' => $this->request->getPost('author'),
            'link' => $this->request->getPost('postLink'),
            'banner' => $this->request->getPost('banner'),
        ];
        $this->postModel->update($post_id, $input_data);

        $post_category_data = [
            'post_id' => $post_id,
            'category_id' => $this->request->getPost('category')
        ];
        $this->postCategoryModel->where('post_id', $post_id)->delete();
        $this->postCategoryModel->insert($post_category_data);

        $post_tag_data = [];
        foreach ($this->request->getPost('tag') ?? [] as $key => $tag) {
            array_push($post_tag_data, [
                'post_id' => $post_id,
                'tag_id' => $tag,
            ]);
        };
        // dd($post_tag_data);
        $this->postTagModel->where('post_id', $post_id)->delete();
        if ($post_tag_data != []) {
            $this->postTagModel->insertBatch($post_tag_data);
        };

        return redirect()->back();
    }
    public function create_category()
    {

        $input_data = [
            'name' => $this->request->getPost('category'),
        ];
        $this->categoryModel->insert($input_data);
        return redirect()->back();
    }
    public function delete_category($categoryId)
    {
        $this->categoryModel->delete($categoryId);
        return redirect()->back();
    }

    public function create_chatbot()
    {
        $input_data = [
            'keyword' => $this->request->getPost('keyword'),
            'answer' => $this->request->getPost('answer'),
        ];
        $this->chatbotModel->insert($input_data);
        return redirect()->back();
    }
    public function delete_chatbot($chatbot_id)
    {
        $this->chatbotModel->delete($chatbot_id);
        return redirect()->back();
    }
    public function create_tag()
    {

        $input_data = [
            'name' => $this->request->getPost('tag'),
        ];
        $this->tagModel->insert($input_data);
        return redirect()->back();
    }
    public function delete_tag($tagId)
    {
        $this->tagModel->delete($tagId);
        return redirect()->back();
    }
    public function laporan()
    {
        $data = [
            'menu' => 'admin',
            'latest_posts' => $this->postModel->findAll(3),
            'file_uploaded' => $this->fileUploadedModel->findAll(),
        ];
        return view('laporan', $data);
    }

    public function upload_laporan()
    {
        $validationRule = [
            'laporan' => [
                'label' => 'File',
                'rules' => [
                    'uploaded[laporan]',
                    'max_size[laporan,2048]',
                ],
            ],
        ];
        if (!$this->validate($validationRule)) {
            $data = $this->validator->getErrors();
            return redirect()->to('admin/laporan')->with('error', $data);
        }

        $filedata = $this->request->getFile('laporan');
        if (!$filedata->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $filedata->store('laporan', $filedata->getName());
            $data = new File($filepath);
            $randomName = $data->getRandomName();
            $data->move(FCPATH . 'laporan/', $randomName, true);
            $newpath = 'laporan/' . $randomName;

            $file = new File($newpath);
            $file_data = [
                'file_location' => $newpath, // Adjust the path based on your directory structure
                // 'name' => $file->getFilename(),
                'name' => $data->getFilename(),
                'extension' => $file->getExtension(),
                'size' => $file->getSize(),
            ];
            $this->fileUploadedModel->insert($file_data);

            return redirect()->to('admin/laporan')->with('success', 'File uploaded successfully.');
        }

        $data = ['errors' => 'The file has already been moved.'];

        return redirect()->to('admin/laporan')->with('error', $data);
    }
    public function delete_laporan()
    {
        // Get the file name from the query string or any other source
        $fileLocation = $this->request->getGet('filelocation');

        // Validate the file name if necessary

        // Set the path to the file within the 'public' directory
        $filePath = FCPATH  . $fileLocation;

        // Check if the file exists
        if (file_exists($filePath)) {
            // Attempt to delete the file
            if (unlink($filePath)) {
                $this->fileUploadedModel->where('file_location', $fileLocation)->delete();
                // File deleted successfully
                return redirect()->back()->with('success_delete', 'File deleted successfully.');
            } else {
                // Unable to delete the file
                return redirect()->back()->with('error_delete', 'Unable to delete the file.');
            }
        } else {
            // If the file doesn't exist, redirect or show an error
            return redirect()->back()->with('error_notfound', 'File not found.');
        }
    }

    public function chatbot()
    {
        $data = [
            'menu' => 'admin',
            'tags' => $this->tagModel->findAll(),
            'latest_posts' => $this->postModel->findAll(3),
            'users' => $this->userModel->findAll(),
            'chatbots' => $this->chatbotModel->findAll(),
        ];
        // dd($data);
        return view('chatbot', $data);
    }
}
