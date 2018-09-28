<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClubStates Controller
 *
 * @property \App\Model\Table\ClubStatesTable $ClubStates
 *
 * @method \App\Model\Entity\ClubState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClubStatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clubStates = $this->paginate($this->ClubStates);

        $this->set(compact('clubStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Club State id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clubState = $this->ClubStates->get($id, [
            'contain' => []
        ]);

        $this->set('clubState', $clubState);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clubState = $this->ClubStates->newEntity();
        if ($this->request->is('post')) {
            $clubState = $this->ClubStates->patchEntity($clubState, $this->request->getData());
            if ($this->ClubStates->save($clubState)) {
                $this->Flash->success(__('The club state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The club state could not be saved. Please, try again.'));
        }
        $this->set(compact('clubState'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Club State id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clubState = $this->ClubStates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clubState = $this->ClubStates->patchEntity($clubState, $this->request->getData());
            if ($this->ClubStates->save($clubState)) {
                $this->Flash->success(__('The club state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The club state could not be saved. Please, try again.'));
        }
        $this->set(compact('clubState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Club State id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clubState = $this->ClubStates->get($id);
        if ($this->ClubStates->delete($clubState)) {
            $this->Flash->success(__('The club state has been deleted.'));
        } else {
            $this->Flash->error(__('The club state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
