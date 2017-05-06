<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserForm;

/**
 * SearchForm represents the model behind the search form about `app\models\UserForm`.
 */
class SearchForm extends UserForm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Balance', 'Balance_Sheet'], 'integer'],
            [['Name', 'Surname', 'MobPhone', 'Email', 'Skype_Login', 'Reg_Date', 'HomePhone'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserForm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Reg_Date' => $this->Reg_Date,
            'Balance' => $this->Balance,
            'Balance_Sheet' => $this->Balance_Sheet,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'MobPhone', $this->MobPhone])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Skype_Login', $this->Skype_Login])
            ->andFilterWhere(['like', 'HomePhone', $this->HomePhone]);

        return $dataProvider;
    }
}
