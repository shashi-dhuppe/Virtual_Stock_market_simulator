import nltk
import random
from nltk.corpus import stopwords
from nltk.classify.scikitlearn import SklearnClassifier
import pickle
from sklearn.naive_bayes import MultinomialNB, BernoulliNB, GaussianNB
from sklearn.linear_model import LogisticRegression, SGDClassifier
from sklearn.svm import SVC, LinearSVC, NuSVC
from nltk.classify import ClassifierI
from statistics import mode
from nltk.tokenize import word_tokenize
##import sys
##reload(sys)
##sys.setdefaultencoding('utf8')



class VoteClassifier(ClassifierI):
    def __init__(self, *classifiers):
        self._classifiers = classifiers

    def classify(self, features):
        votes = []
        for c in self._classifiers:
            v = c.classify(features)
            votes.append(v)
        print(votes)
        return mode(votes)

    def confidence(self, features):
        votes = []
        for c in self._classifiers:
            v = c.classify(features)
            votes.append(v)

        choice_votes = votes.count(mode(votes))
        conf = choice_votes / len(votes)
        return conf

documents_f = open('C:\Python\pickled_algos_domain\documents.pickle', 'rb')
documents = pickle.load(documents_f)
documents_f.close()

    

##word_features5k_f = open('C:\Python\pickled_algos\word_features5k.pickle', 'rb')
##word_features = pickle.load(word_features5k_f)
##word_features5k_f.close()


def find_features(document):
    words = word_tokenize(document)
    features = {}
    for w in word_features:
        features[w] = (w in words)
    return features
##
featuresets = [(find_features(rev), category) for (rev, category) in documents]
##print(featuresets)
##
random.shuffle(featuresets)
print(len(featuresets))

training_set = featuresets[1000:]
testing_set = featuresets[:1000]

##classifier = nltk.NaiveBayesClassifier.train(training_set)
##print("Original Naive Bayes Algo accuracy percent:", (nltk.classify.accuracy(classifier, testing_set))*100)

##
open_file = open('C:\Python\pickled_algos_domain\originalnaivebayes5k.pickle', 'rb')
classifier = pickle.load(open_file)
####print("Original Naive Bayes Algo accuracy percent:", (nltk.classify.accuracy(classifier, testing_set))*100)
#open_file.close()
##
##open_file = open('C:\Python\pickled_algos_domain\MNB_classifier5k.pickle', 'rb')
##MNB_classifier = pickle.load(open_file)
####print("MNB_classifier accuracy percent:", (nltk.classify.accuracy(MNB_classifier, testing_set))*100)
##open_file.close()
##
##
##
##open_file = open('C:\Python\pickled_algos_domain\BernoulliNB_classifier5k.pickle', 'rb')
##BernoulliNB_classifier = pickle.load(open_file)
####print("BernoulliNB_classifier accuracy percent:", (nltk.classify.accuracy(BernoulliNB_classifier, testing_set))*100)
##open_file.close()
##
##
##open_file = open('C:\Python\pickled_algos_domain\LogisticRegression_classifier5k.pickle', 'rb')
##LogisticRegression_classifier = pickle.load(open_file)
####print("LogisticRegression_classifier accuracy percent:", (nltk.classify.accuracy(LogisticRegression_classifier, testing_set))*100)
##open_file.close()
##
##
##open_file = open('C:\Python\pickled_algos_domain\LinearSVC_classifier5k.pickle', 'rb')
##LinearSVC_classifier = pickle.load(open_file)
####print("LinearSVC_classifier accuracy percent:", (nltk.classify.accuracy(LinearSVC_classifier, testing_set))*100)
##open_file.close()

voted_classifier = VoteClassifier(
                                  classifier)
##                                  LinearSVC_classifier,
##                                  BernoulliNB_classifier,
##                                  MNB_classifier,
##                                  LogisticRegression_classifier)
##
####
####
####
def sentiment(text):
    feats = find_features(text)
    return voted_classifier.classify(feats)
##,voted_classifier.confidence(feats)
####
##

 
fp=open('input.txt')
F = open('output_domain.txt','w')


with open('input.txt') as fp:
    fp.seek(0)
    fchar=fp.read(1)
    if not fchar:
        print ("File empty")
    else:
        fp.seek(0)
        inp=fp.readlines()
        ip=' '.join(inp)
        F.write(sentiment(ip))
##      print(sentiment(ip))
fp.close()


##F.write(sentiment(ip))
F.close()

##print(sentiment("Chinas Solar Prices Can Fall 38%, Become Competitive With Coal."))











