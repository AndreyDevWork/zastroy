<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        try {
            Yii::$app->db->open();
            echo "Соединение с базой данных установлено успешно!";
        } catch (\Exception $e) {
            echo "Ошибка при соединении с базой данных: " . $e->getMessage();
        }
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        $this->layout = 'login';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model, 'baseUrl' => $baseUrl
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionAdmin()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('admin', ['baseUrl' => $baseUrl]);
    }
    public function actionSales()
    {
        $breadcrumbs = ['Sales'];
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('sales', ['baseUrl' => $baseUrl, 'breadcrumbs' => $breadcrumbs]);
    }
    public function actionRequest()
    {
        $breadcrumbs = ['Request'];
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('request', ['baseUrl' => $baseUrl, 'breadcrumbs' => $breadcrumbs]);
    }
    public function actionCatalog()
    {
        $breadcrumbs = ['Catalog'];
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('catalog', ['baseUrl' => $baseUrl, 'breadcrumbs' => $breadcrumbs]);
    }
    public function actionLeadersSalesDepartment()
    {
        $breadcrumbs = ['Leaders-sales-department'];
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('leaders-sales-department', ['baseUrl' => $baseUrl, 'breadcrumbs' => $breadcrumbs]);
    }
    public function actionMenegersSalesDepartment()
    {
        $breadcrumbs = ['Menegers-sales-department'];
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('menegers-sales-department', ['baseUrl' => $baseUrl, 'breadcrumbs' => $breadcrumbs]);
    }
    public function actionCategory()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('category', ['baseUrl' => $baseUrl]);
    }
    public function actionEditCategory()
    {
        $model = new LoginForm();
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('edit-category', ['model' => $model, 'baseUrl' => $baseUrl]);
    }
    public function actionProduct()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('product', ['baseUrl' => $baseUrl]);
    }
    public function actionEditProduct()
    {
        $model = new LoginForm();
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('edit-product', ['model' => $model, 'baseUrl' => $baseUrl]);
    }
    public function actionSalesPerson()
    {
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('sales-person', ['baseUrl' => $baseUrl]);
    }

    public function actionLeader()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('leader', ['baseUrl' => $baseUrl]);
    }

    public function actionMeneger()
    {
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('meneger', ['baseUrl' => $baseUrl]);
    }
    public function actionEditLeader()
    {
        $model = new LoginForm();
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('edit-leader', ['baseUrl' => $baseUrl, 'model' => $model,]);
    }

    public function actionMyData() {
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('my-data', ['baseUrl' => $baseUrl]);
    }
    public function actionPickObject() {
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('pick-objects', ['baseUrl' => $baseUrl]);
    }
    public function actionResponse() {
        $this->layout = 'left-side';
        $baseUrl = \Yii::$app->request->baseUrl;
        return $this->render('response', ['baseUrl' => $baseUrl]);
    }
}
